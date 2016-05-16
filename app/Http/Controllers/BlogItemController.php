<?php

namespace App\Http\Controllers;

use App\BlogCat;
use App\BlogItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;
use Input;
use Validator;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ImageResize;

class BlogItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Blog Item";

        $data = BlogItem::orderBy('id', 'DESC')->paginate(10);
        $blog_cat_id = BlogCat::lists('title','id');

        return view('blog_item.index', ['data' => $data, 'pageTitle'=> $pageTitle, 'blog_cat_id'=> $blog_cat_id]);
    }
    public function add_index()
    {
        $pageTitle = "Blog Item";
        $data = BlogItem::orderBy('id', 'DESC')->paginate(10);
        $blog_cat_id = BlogCat::lists('title','id');

        return view('blog_item.add', ['pageTitle'=> $pageTitle,'data'=>$data , 'blog_cat_id'=>$blog_cat_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BlogItemRequest $request)
    {
        $input = $request->all();
        $image = Input::file('image');
//        print_r($image);exit;
        $user_id = Auth::user()->id;
        $model = new BlogItem();
        $input['created_by'] = $user_id;
        $input['slug'] = str_slug(strtolower($input['title']));

        $blog_item_exists = BlogItem::where('slug',$input['slug'])->exists();

        if($blog_item_exists){
            Session::flash('flash_message_error',' Already Exists.');
        }else{
            if(count($image)>0){
                $file_type_required = 'png,jpeg,jpg';
                $destinationPath = 'uploads/blog_image/';

                $uploadfolder = 'uploads/';

                if ( !file_exists($uploadfolder) ) {
                    $oldmask = umask(0);  // helpful when used in linux server
                    mkdir ($uploadfolder, 0777);
                }

                if ( !file_exists($destinationPath) ) {
                    $oldmask = umask(0);  // helpful when used in linux server
                    mkdir ($destinationPath, 0777);
                }

                $file_name = BlogItemController::image_upload($image,$file_type_required,$destinationPath);
//            print_r($file_name);exit;
                if($file_name != '') {
//                unlink($model->image);
//                unlink($model->thumbnail);
                    $input['image'] = $file_name[0];
                    $input['thumbnail'] = $file_name[1];
                }
                else{
                    Session::flash('flash_message_error', 'Some thing error in image file type! Please Try again');
                    return redirect()->back();
                }
            }
            DB::beginTransaction();
            try {
                $model->create($input);
                DB::commit();
                Session::flash('flash_message', 'Successfully added!');
            }catch (\Exception $e) {
                //If there are any exceptions, rollback the transaction`
                DB::rollback();
                Session::flash('flash_message_error', $e->getMessage());
            }
        }
        return redirect()->route('blog_item-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $pageTitle = 'Show the detail';
        $data = BlogItem::where('slug',$slug)->first();
        return view('blog_item.view', ['data' => $data, 'pageTitle'=> $pageTitle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $pageTitle = 'update blog item';
        $data = BlogItem::where('slug',$slug)->first();
        $blog_cat_id = BlogCat::lists('title','id');
        return view('blog_item.update', ['data' => $data,'blog_cat_id'=>$blog_cat_id,'pageTitle'=>$pageTitle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\BlogItemRequest $request, $slug)
    {
        $input = $request->all();
        $image=Input::file('image');
        $input['slug'] = str_slug(strtolower($input['title']));

        $model = BlogItem::where('slug',$slug)->first();

        if(count($image)>0){
            $file_type_required = 'png,jpeg,jpg';
            $destinationPath = 'uploads/blog_image/';

            $uploadfolder = 'uploads/';

            if ( !file_exists($uploadfolder) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($uploadfolder, 0777);
            }

            if ( !file_exists($destinationPath) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($destinationPath, 0777);
            }

            $file_name = BlogItemController::image_upload($image,$file_type_required,$destinationPath);
            if($file_name != '') {
//                unlink($model['image']);
//                unlink($model['thumbnail']);
                $input['image'] = $file_name[0];
                $input['thumbnail'] = $file_name[1];
            }
            else{
                Session::flash('flash_message_error', 'Some thing error in image file type! Please Try again');
                return redirect()->back();
            }
        }
            DB::beginTransaction();
            try {
                $model->update($input);
                DB::commit();
                Session::flash('flash_message', 'Successfully added!');
            }catch (\Exception $e) {
                //If there are any exceptions, rollback the transaction`
                DB::rollback();
                Session::flash('flash_message_error', $e->getMessage());
            }

        return redirect()->route('blog_item-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($slug)
    {
        try {
            $model = BlogItem::where('slug',$slug)->first();
            if ($model->delete()) {
                Session::flash('flash_message', " Successfully Deleted.");
            }
        } catch(\Exception $e) {
            Session::flash('flash_message_error',$e->getMessage() );
        }
        return redirect()->back();
    }

    public function comment(Requests\BlogItemRequest $request)
    {
//        exit('bhgfh');
        $input = $request->all();
        $user_id = Auth::user()->id;

        $input['created_by'] = $user_id;

        /* Transaction Start Here */
        DB::beginTransaction();
        try {
            BlogItem::create($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
        }catch (\Exception $e) {
            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());
        }
        return redirect()->back();
    }


    public function image_upload($image,$file_type_required,$destinationPath){
        if ($image != '') {

            $img_name = ($_FILES['image']['name']);
            $random_number = rand(111, 999);

            $thumb_name = 'thumb_50x50_'.$random_number.'_'.$img_name;

            $newWidth=200;
            $targetFile=$destinationPath.$thumb_name;
            $originalFile=$image;

            $resizedImages 	= ImageResize::resize($newWidth, $targetFile,$originalFile);

            $thumb_image_destination=$destinationPath;
            $thumb_image_name=$thumb_name;

            //$rules = array('image' => 'required|mimes:png,jpeg,jpg');
            $rules = array('image' => 'required|mimes:'.$file_type_required);
            $validator = Validator::make(array('image' => $image), $rules);
            if ($validator->passes()) {
                // Files destination
                //$destinationPath = 'uploads/slider_image/';
                // Create folders if they don't exist
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }
                $image_original_name = $image->getClientOriginalName();
                $image_name = rand(11111, 99999) . $image_original_name;
                $upload_success = $image->move($destinationPath, $image_name);

                $file=array($destinationPath . $image_name, $thumb_image_destination.$thumb_image_name);

                if ($upload_success) {
                    return $file_name = $file;
                }
                else{
                    return $file_name = '';
                }
            }
            else{
                return $file_name = '';
            }
        }
    }

}

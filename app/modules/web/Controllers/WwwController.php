<?php
/**
 * Created by PhpStorm.
 * User: sr
 * Date: 12/24/15
 * Time: 11:16 AM
 */

namespace App\Modules\Web\Controllers;

use App\Article;
use App\BlogItem;
use App\GalImage;
use App\Media;
use App\SliderImage;
use App\Team;
use App\User;
use App\Widget;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use Mail;
use Session;
use App\Menu;
use App\MenuType;
use DB;
use App\Events\Event;
use App\Events\MyWidgets;
use Illuminate\Support\Facades\Config;
use App\Helpers\EmailSend;

class WwwController extends Controller
{
    public function home_page()
    {
        $home_value = "home";
        $title = "Home | BZM Graphics";

        $slider = SliderImage::where('cat_slider_id', 1)->get();
        $group = SliderImage::where('cat_slider_id', 1)->where('group', 'group_1')->get();

        $data = Article::where('type', 'home-page')->where('status', 'active')->first();
        $blog_data = BlogItem::with('relBlogCat')->where('status', 'active')->orderBy('id', 'DESC')->take(3)->get();
        $user = User::where('status', 'active')->first();
      # print_r($data->type);exit;
        return view('web::layout.home_page', [
            'slider'=>$slider, 'group'=>$group,
            'home_value'=>$home_value,
            'title'=>$title,
            'data'=>$data,
            'blog_data'=>$blog_data,
            'user'=>$user,
        ]);
    }

    public function services_1(){
        $title = "Services | BZM Graphics";
        $data = Article::where('type', 'services-1')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function how_it_works(){
        $title = "How BZM Graphics works";
        $data = Article::where('type', 'how-it-works')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function about_us(){
        $title = "About Us";
        $data = Article::where('type', 'about-us')->where('status', 'active')->first();
        $team = Team::where('status', 'active')->get();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title, 'team'=>$team]);
    }

    public function our_works(){
        $title = "Our Works";

        $data = DB::table('gal_image')
            ->join('cat_gallery', function ($join) {
                $join->on('gal_image.cat_gallery_id', '=', 'cat_gallery.id')
                    ->where('cat_gallery.status', '=', 'active');
            })
            ->select('gal_image.*', 'cat_gallery.title')
            ->get();

        return view('web::our_works.index', ['data'=>$data,'title'=>$title,]);
    }

    public function photoshop_clipping_path(){
        $title = "Photoshop Clipping Path";
        $data = Article::where('type', 'photoshop-clipping-path')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function image_masking(){
        $title = "Image Masking | BZM Graphics";
        $data = Article::where('type', 'image-masking')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }


    public function color_separation_correction(){
        $title = "Color Separation Correction";
        $data = Article::where('type', 'color-separation-correction')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function photo_retouching(){
        $title = "Photo Retouching";
        $data = Article::where('type', 'photo-retouching')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function image_manipulation(){
        $title = "Image Manipulation";
        $data = Article::where('type', 'image-manipulation')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function shadow_and_reflection_creation(){
        $title = "Shadow Reflection";
        $data = Article::where('type', 'shadow-and-reflection-creation')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }

    public function e_commerce_image_optimization(){
        $title = "Ecommerce Image Optimization";
        $data = Article::where('type', 'e-commerce-image-optimization')->where('status', 'active')->first();
        return view('web::pages.inner_page', ['data'=>$data,'title'=>$title,]);
    }


    public function contact(){
        $title = "Contact | BZM Graphics";
        $contact_footer_map = 'footer-map';
        $data = Article::where('type', 'contact')->where('status', 'active')->first();
        return view('web::pages.contact', ['data'=>$data,'title'=>$title, 'contact_footer_map'=>$contact_footer_map]);
    }


    public function free_trial(){
        $title = "Free Trial | BZM Graphics";
        $data = Article::where('type', 'free-trial')->where('status', 'active')->first();
        return view('web::pages.free_trial', ['data'=>$data,'title'=>$title,]);
    }

    public function ajax_send_message()
    {
        $input_data = Input::all();
        $body = $input_data['message'];
        $file = null;

        try{

            // Fire Email
            Mail::send('email_template.common', array('body' => $body, 'file'=>$file),
                function ($message) use ($input_data, $body) {
                    $message->from($input_data['email'], @$input_data['cl_name']);
                    $message->to('bzmgraphics@gmail.com', 'bZm Graphics');
                    #$message->cc($input_data['email'], 'Client Email');
                    $message->replyTo($input_data['email'], @$input_data['cl_name']);
                    $message->subject('Contact | bZm Graphics');
                    $message->setBody($body, 'text/html');

                });


            // Send Confirmation
            Mail::send('email_template.confirmation', array(null),function ($message) use ($input_data) {
                $message->from('hello@bzmgraphics.com', 'bZm Graphics');
                $message->to($input_data['email'], @$input_data['cl_name']);
                $message->replyTo('hello@bzmgraphics.com', 'bZm Graphics');
                $message->subject('Confirmation | bZm Graphics');
            });

            return response()->json(['response' => 'Successfully Sent !']);
        }catch (\Exception $e){

            return response()->json(['response' => $e->getMessage()]);
        }

    }

    public function contact_free_trial(){

        $input_data = Input::all();
        $file1 = Input::file('file1');
        $file2 = Input::file('file2');
        $file3 = Input::file('file3');

        /*if any file is null*/
        $attach_files =[
            $file1 ? $file1 : null,
            $file2 ? $file2 : null,
            $file3 ? $file3 : null,
        ];

        $i = 0;
        foreach($attach_files as $file){
            if(isset($file)){
                $rules = array('file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,jpg,xlsx,xls,docx,pptx,ppt,pub,zip,csv');
                $validator = Validator::make(array('file' => $file), $rules);
                if ($validator->passes()) {
                    $destinationPath = 'uploads/free_trial/images/';
                    /*if path does not exist*/
                    if ( !file_exists($destinationPath) ) {
                        $oldmask = umask(0);  // helpful when used in linux server
                        mkdir ($destinationPath, 0777,true);
                    }
                    $file_original_name = $file->getClientOriginalName();
                    $file_name = rand(11111, 99999) . $file_original_name;
                    $file->move($destinationPath, $file_name);
                    $file_send[$i] = 'uploads/free_trial/images/'.$file_name;
                }
                $i++;
            }
        }

        $body = $input_data['message'];

        try{

            //Fire Email
            Mail::send('email_template.common', array('body' => $body, 'file'=>$file_send),
                function ($message) use ($input_data,$file_send, $body) {
                    $message->from($input_data['email'], @$input_data['name']);
                    $message->to('bzmgraphics@gmail.com', 'bZm Graphics');
                    #$message->cc($input_data['email'], 'Client Email');
                    $message->replyTo($input_data['email'], @$input_data['name']);
                    $message->subject('Free Trail | bZm Graphics');
                    $message->setBody($body, 'text/html');

                    //TODO:: configure attachment in laravel
                    if(count($file_send)>0){
                        //get the count of number of attachments
                        $size = sizeOf($file_send);
                        for($i=0; $i< $size; $i++){
                            if(isset($i)){
                                $message->attach($file_send[$i]);
                            }
                        }
                    }
                });


            // Send Confirmation
            Mail::send('email_template.confirmation', array(''),function ($message) use ($input_data) {
                $message->from('hello@bzmgraphics.com', 'bZm Graphics');
                $message->to($input_data['email'], @$input_data['name']);
                #$message->cc($input_data['email'], 'Client Email');
                $message->replyTo('hello@bzmgraphics.com', 'bZm Graphics');
                $message->subject('Confirmation | bZm Graphics');
            });
            Session::flash('message', 'Successfully Sent !');
        }catch (\Exception $e){
            return response()->json(['response' => $e->getMessage()]);
        }
        return redirect()->back();
    }

    public function search_result(){
        $title = "Search Result | BZM Graphics";
        $q = Input::get('query');
        $data = Article::where('title', 'LIKE', "%".$q."%")->orWhere('desc', 'LIKE', "%".$q."%")->get();
        return view('web::search.search_result',['data'=>$data,'title'=>$title, 'q'=>$q]);
    }

    public function blog_item($slug){

        $title = "Home | BZM Graphics";
        $data = BlogItem::where('status', 'active')->where('slug', $slug)->first();

        return view('web::pages.blog_item',['data'=>$data,'title'=>$title]);
    }



    public function ppc_index(){
        return view('web::ppc.ppc');
    }

    public function thank_you_ppc(){
        exit("Thank-you");
    }


    public function p_free_trial(){

        $input_data = Input::all();
        $file1 = Input::file('file1');
        $file2 = Input::file('file2');
        $file3 = Input::file('file3');

        /*if any file is null*/
        $attach_files =[
            $file1 ? $file1 : null,
            $file2 ? $file2 : null,
            $file3 ? $file3 : null,
        ];

        $i = 0;
        foreach($attach_files as $file){
            if(isset($file)){
                $rules = array('file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,jpg,xlsx,xls,docx,pptx,ppt,pub,zip,csv');
                $validator = Validator::make(array('file' => $file), $rules);
                if ($validator->passes()) {
                    $destinationPath = 'etsb/ppc/uploaded/landing/';
                    /*if path does not exist*/
                    if ( !file_exists($destinationPath) ) {
                        $oldmask = umask(0);  // helpful when used in linux server
                        mkdir ($destinationPath, 0777,true);
                    }
                    $file_original_name = $file->getClientOriginalName();
                    $file_name = rand(11111, 99999) . $file_original_name;
                    $file->move($destinationPath, $file_name);
                    $file_send[$i] = 'etsb/ppc/uploaded/landing/'.$file_name;
                }
                $i++;
            }
        }

        $body = $input_data['message'];

        try{

            //Fire Email
            Mail::send('email_template.common', array('body' => $body, 'file'=>$file_send),
                function ($message) use ($input_data,$file_send, $body) {
                    $message->from($input_data['email'], @$input_data['name']);
                    $message->to('bzmgraphics@gmail.com', 'bZm Graphics');
                    #$message->cc($input_data['email'], 'Client Email');
                    $message->replyTo($input_data['email'], @$input_data['name']);
                    $message->subject('Free Trail PPC | bZm Graphics');
                    $message->setBody($body, 'text/html');

                    //TODO:: configure attachment in laravel
                    if(count($file_send)>0){
                        //get the count of number of attachments
                        $size = sizeOf($file_send);
                        for($i=0; $i< $size; $i++){
                            if(isset($i)){
                                $message->attach($file_send[$i]);
                            }
                        }
                    }
                });


            // Send Confirmation
            Mail::send('email_template.confirmation', array(''),function ($message) use ($input_data) {
                $message->from('hello@bzmgraphics.com', 'bZm Graphics');
                $message->to($input_data['email'], @$input_data['name']);
                #$message->cc($input_data['email'], 'Client Email');
                $message->replyTo('hello@bzmgraphics.com', 'bZm Graphics');
                $message->subject('Free Trial Confirmation | bZm Graphics');
            });
            Session::flash('message', 'Successfully Sent !');
        }catch (\Exception $e){
            return response()->json(['response' => $e->getMessage()]);
        }

        Session::flash('message', 'Successfully Sent !');
        return redirect()->back();
    }


    public function pf_contact_form(){

        $input_data = Input::all();
        $body = $input_data['contact_message'];
        $file = null;

        try{
            // Fire Email
            Mail::send('email_template.common', array('body' => $body, 'file'=>$file),
                function ($message) use ($input_data, $body) {
                    $message->from($input_data['contact_email'], @$input_data['contact_name']);
                    $message->to('bzmgraphics@gmail.com', 'bZm Graphics');
                    #$message->cc($input_data['email'], 'Client Email');
                    $message->replyTo($input_data['contact_email'], @$input_data['contact_name']);
                    $message->subject('PPC Contact | bZm Graphics');
                    $message->setBody($body, 'text/html');
                });


            // Send Confirmation
            Mail::send('email_template.confirmation', array(null),function ($message) use ($input_data) {
                $message->from('hello@bzmgraphics.com', 'bZm Graphics');
                $message->to($input_data['contact_email'], @$input_data['contact_name']);
                $message->replyTo('hello@bzmgraphics.com', 'bZm Graphics');
                $message->subject('Confirmation | bZm Graphics');
            });

            #return response()->json(['response' => 'Successfully Sent !']);
        }catch (\Exception $e){
            #return response()->json(['response' => $e->getMessage()]);
        }

        Session::flash('message', 'Successfully Sent !');
        return redirect()->back();
    }


}
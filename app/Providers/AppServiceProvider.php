<?php

namespace App\Providers;

use App\Media;
use App\Widget;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //TODO if menu array is populated as multi-dimensional array then it could be easy to handle multi-level menu
        if(Schema::hasTable('menu')){
            if(!Session::has('parent')) {
                $parent = DB::table('menu as menu')
                    ->join('menu_type as type', function ($join) {
                        $join->on('menu.menu_type_id', '=', 'type.id')
                            ->where('type.type', '=', 'top');
                    })
                    ->where('menu.status', '=', 'active')
                    ->orderBy('menu.order', 'asc')
                    ->select('menu.*')
                    ->get();
                Session::put('parent', $parent);
            }
            if(!Session::has('parent_footer')){
                $parent_footer = DB::table('menu as menu')
                    ->join('menu_type as type', function ($join) {
                        $join->on('menu.menu_type_id', '=', 'type.id')
                            ->where('type.type', '=', 'footer');
                    })
                    ->where('menu.status', '=', 'active')
                    ->orderBy('menu.order', 'asc')
                    ->select('menu.*')
                    ->get();
                Session::put('parent_footer',$parent_footer);
            }
            if(!Session::has('header_logo')){
                $media_exists = Media::where('position','logo')->exists();
                if($media_exists){
                    $header_logo = Media::where('position','logo')->first()->file_name;
                    Session::put('header_logo',$header_logo);
                }
            }
            #print_r(Session::pull('header_logo'));exit;
            view()->composer('web::layout.web_master', function($view)
            {

            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

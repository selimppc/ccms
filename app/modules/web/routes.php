<?php
/**
 * Created by PhpStorm.
 * User: selim
 * Date: 12/8/2015
 * Time: 5:54 PM
 */

Route::group(array('moduls'=>'Web', 'namespace' => 'App\Modules\Web\Controllers'), function() {
    //Your routes belong to this module.

/*Route::any('admin', [
    'as' => 'admin',
    'uses' => 'HomeController@user_login'
]);*/

Route::any('home-page', [
    'as' => 'home-page',
    'uses' => 'WwwController@home_page'
]);

Route::any('/', [
    'as' => 'home-page',
    'uses' => 'WwwController@home_page'
]);

Route::any('about-us', [
    'as' => 'about-us',
    'uses' => 'WwwController@about_us'
]);

Route::any('services-1', [
    'as' => 'services-1',
    'uses' => 'WwwController@services_1'
]);

Route::any('how-it-works', [
'as' => 'how-it-works',
'uses' => 'WwwController@how_it_works'
]);



Route::any('our-works', [
    'as' => 'our-works',
    'uses' => 'WwwController@our_works'
]);

Route::any('photoshop-clipping-path', [
    'as' => 'photoshop-clipping-path',
    'uses' => 'WwwController@photoshop_clipping_path'
]);

Route::any('image-masking', [
    'as' => 'image-masking',
    'uses' => 'WwwController@image_masking'
]);

Route::any('color-separation-correction', [
    'as' => 'color-separation-correction',
    'uses' => 'WwwController@color_separation_correction'
]);

Route::any('photo-retouching', [
    'as' => 'photo-retouching',
    'uses' => 'WwwController@photo_retouching'
]);

Route::any('image-manipulation', [
    'as' => 'image-manipulation',
    'uses' => 'WwwController@image_manipulation'
]);

Route::any('shadow-and-reflection-creation', [
'as' => 'shadow-and-reflection-creation',
'uses' => 'WwwController@shadow_and_reflection_creation'
]);

Route::any('e-commerce-image-optimization', [
'as' => 'e-commerce-image-optimization',
'uses' => 'WwwController@e_commerce_image_optimization'
]);


Route::any('contact-us', [
    'as' => 'contact-us',
    'uses' => 'WwwController@contact'
]);

Route::any('free-trial', [
    'as' => 'free-trial',
    'uses' => 'WwwController@free_trial'
]);

/*write to us :routes*/

Route::post('ajax-send-message', [
    'as' => 'ajax-send-message',
    'uses' => 'WwwController@ajax_send_message'
]);

Route::any('contact-free-trial', [
    'as' => 'contact-free-trial',
    'uses' => 'WwwController@contact_free_trial'
]);

/*Search*/
Route::get('search-result', [
    'as' => 'search-result',
    'uses' => 'WwwController@search_result'
]);

Route::any('{slug}', [
    'as' => 'blog',
    'uses' => 'WwwController@blog_item'
]);


Route::any('index/ppc', [
    'as' => 'index/ppc',
    'uses' => 'WwwController@ppc_index'
]);

Route::any('index/ppc-free-trial', [
    'as' => 'index/ppc-free-trial',
    'uses' => 'WwwController@p_free_trial'
]);

Route::any('index/thank-you', [
    'as' => 'index/thank-you',
    'uses' => 'WwwController@thank_you_ppc'
]);

Route::any('index/pf-contact', [
    'as' => 'index/pf-contact',
    'uses' => 'WwwController@pf_contact_form'
]);

});


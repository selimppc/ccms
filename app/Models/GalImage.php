<?php
/**
 * Created by PhpStorm.
 * User: etsb
 * Date: 11/24/15
 * Time: 4:36 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Http\Request;
class GalImage extends Model
{

    protected $table = 'gal_image';

    protected $fillable = [
        'cat_gallery_id','name','slug','image','thumbnail','status'
    ];
    public function relCatGallery(){
        return $this->belongsTo('App\CatGallery', 'cat_gallery_id', 'id');
    }
}
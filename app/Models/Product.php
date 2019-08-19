<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'updated_at', 'category_id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    public function detail()
    {
        return $this->hasOne('App\Models\ProductDetail','product_id');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\ProductPhotos','product_id');   
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');   
    }

}

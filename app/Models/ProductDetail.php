<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    // use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'created_at', 'updated_at', 'product_id', 'id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_detail';

    public function photos()
    {
        return $this->hasMany('App\Models\ProductPhotos','product_id', 'product_id');   
    }

}

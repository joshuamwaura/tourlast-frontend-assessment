<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApartmentImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'apartment_images';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute($value)
    {
        return asset('image') .'/'. $value;
    }
}

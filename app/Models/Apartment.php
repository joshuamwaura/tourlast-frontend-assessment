<?php

namespace App\Models;

use App\Enums\UserModule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apartment extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'apartments';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;

    public function property()
    {
        return $this->hasOne(ApartmentProperty::class, 'id', 'property_id');
    }

    public function company()
    {
        return $this->hasOne(User::class, 'id', 'company_id');
    }

    public function images()
    {
        return $this->hasMany(ApartmentImage::class, 'apartment_id', 'id');
    }
    
    public function getThumbnailAttribute($value)
    {
        return asset('frontend/thumbnail').'/'.$value;
    }

    public function amenity()
    {
        return $this->hasMany(PtAmenity::class, 'pt_id', 'id')->where('type', 'apartment');
    }
}

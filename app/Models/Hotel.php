<?php

namespace App\Models;

use App\Enums\UserModule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'hotels';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = true;

    public function company()
    {
        return $this->hasOne(User::class, 'id', 'company_id');
    }

    public function images()
    {
        return $this->hasMany(HotelImage::class, 'hotel_room_id', 'id')->where('type', 'hotel');
    }

    public function room()
    {
        return $this->hasOne(HotelRoom::class, 'hotel_id', 'id');
    }

    public function rooms()
    {
        return $this->hasMany(HotelRoom::class, 'hotel_id', 'id');
    }
    public function getThumbnailAttribute($value)
    {
        return asset('frontend/thumbnail').'/'.$value;
    }

    public function getExteriorAttribute($value)
    {
        return asset('frontend/exterior').'/'.$value;
    }

    public function getInteriorAttribute($value)
    {
        return asset('frontend/interior').'/'.$value;
    }

    public function getRecreationalAttribute($value)
    {
        return asset('frontend/recreational').'/'.$value;
    }

    public function getLobbyAttribute($value)
    {
        return asset('frontend/lobby').'/'.$value;
    }

    public function getDinningAttribute($value)
    {
        return asset('frontend/dinning').'/'.$value;
    }

    public function getMeetingAttribute($value)
    {
        return asset('frontend/meeting').'/'.$value;
    }

    public function amenity()
    {
        return $this->hasMany(PtAmenity::class, 'pt_id', 'id')->where('type', 'hotel');
    }

    public function hotelAmenities()
    {
        return $this->hasMany(HotelAmenitie::class, 'hotel_room_id', 'id')->where('type', 'hotel');
    }

    public function hotelRoomImages()
    {
        return $this->hasManyThrough(HotelImage::class, HotelRoom::class, 'hotel_id', 'hotel_room_id', 'id', 'id');
    }

    public function getReviewsAttributes()
    {
        $roomIds = $this->rooms->pluck('id');

        return Review::where('module', UserModule::HOTEL->value)
            ->whereIn('module_item_id', $roomIds)
            ->where('approved', true)
            ->with('bookable', 'user')
            ->get();
    }

    public function reviews()
    {
        $roomIds = $this->rooms->pluck('id');

        return Review::where('module', UserModule::HOTEL->value)
            ->whereIn('module_item_id', $roomIds)
            ->where('approved', true)
            ->with('bookable', 'user')
            ->get();
    }
}

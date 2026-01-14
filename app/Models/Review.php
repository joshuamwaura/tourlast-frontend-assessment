<?php

namespace App\Models;

use App\Enums\UserModule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'module',
        'module_item_id',
        'booking_id',
        'message',
        'approved',
        'staff',
        'facilities',
        'cleanliness',
        'comfort',
        'value_for_money',
        'location',
        'free_wifi',
    ];

    public function getModuleEnumAttribute()
    {
        return UserModule::from($this->module);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return match (UserModule::from($this->module)) {
        };
    }

    public function moduleItem()
    {
        return match (UserModule::from($this->module)) {
            UserModule::HOTEL => HotelRoom::with('hotel')->find($this->module_item_id),
        };
    }

    public function bookable(): MorphTo
    {
        return $this->morphTo();
    }
}

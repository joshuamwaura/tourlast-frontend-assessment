<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PtAmenity extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'pt_amenities';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;

    public function amenity()
    {
        return $this->hasOne(Amenity::class, 'id', 'amenity_id');
    }

    public function amenityloop()
    {
        return $this->hasMany(Amenity::class, 'id', 'amenity_id');
    }
    
    public function amenity_child()
    {
        return $this->hasOne(Amenity::class, 'id', 'amenity_id');
    }
}

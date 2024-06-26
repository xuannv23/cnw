<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    protected $table = 'flowers';

    protected $primaryKey = 'flower_id';

    protected $fillable = ['flower_id', 'name', 'description', 'image_url'];

    // Định nghĩa quan hệ với bảng Bookings
    public function region()
    {
        return $this->belongsTo(Region::class, 'flower_id', 'flower_id');
    }
}

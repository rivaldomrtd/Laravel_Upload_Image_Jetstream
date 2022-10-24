<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description'
    ];

    public function getCreatedAtAttribute($updated_at)
    {
        return Carbon::parse($updated_at)->format('d-M-Y H:i');
    }
    public function getUpdatedAtAttribute($updated_at)
    {
        return Carbon::parse($updated_at)->format('d-M-Y H:i');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description', 'file'
    ];

    protected function file(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => url('uploads/'.$value),
        );
    }
    public function getCreatedAtAttribute($date)
    {
    return Carbon::parse($date)->format('d-M-Y H:i');
    }
}

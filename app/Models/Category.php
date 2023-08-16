<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class)->orderBy('id', 'asc');
    }
    public function lastPhotos()
    {
        return $this->hasMany(Photo::class)->latest()->take(11);
    }
}

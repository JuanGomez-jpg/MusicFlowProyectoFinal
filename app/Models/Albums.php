<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;
    protected $fillable = ['albumName', 'year', 'genre', 'coverImg', 'artist', 'description'];
    //protected $guarded = ['id'];
    public $timestamps = false;

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ['songName', 'songDuration', 'songLyrics'];
    protected $table = 'songs';
    public $timestamps = false;

    public function album()
    {
        return $this->belongsToMany(Albums::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;

class Albums extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['albumName', 'artistName',  'year', 'genre', 'coverImg', 'coverRoute', 'description', 'price', 'user_id'];
    //protected $guarded = ['id'];
    //public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}

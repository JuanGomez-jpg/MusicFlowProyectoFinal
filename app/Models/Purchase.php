<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['cardHolderName', 'cardNumber', 'cardExp', 'CVV', 'purchaseDate', 'total', 'user_id', 'albums_id'];
    //public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

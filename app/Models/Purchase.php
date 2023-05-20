<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['cardHolderName', 'cardNumber', 'cardExp', 'CVV', 'purchaseDate', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

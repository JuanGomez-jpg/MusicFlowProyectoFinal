<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    /*protected function purchaseDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => datetime('d-m-Y')
        );
    }*/
    public function getpurchaseDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d/m/Y');
    }

    public function setFechaAttribute($value)
    {
    // Aquí puedes ajustar el formato de la fecha si es necesario
        $this->attributes['purchaseDate'] = \Carbon\Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }
}

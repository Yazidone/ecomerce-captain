<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Method extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    
    public function orders() {
        return $this->hasMany(Order::class);
    }
};  //  end class Shopping  Methods Methods


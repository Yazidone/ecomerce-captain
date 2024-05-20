<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function favoris(){
        return $this->blongToMany(Panier::class,'favoris');
    }

    public function paniers(){
        return $this->belongsToMany(produit::class,'panier');
    }

  
    use HasFactory;
    protected $fillable = [
      
        'name',
        'email',
        'password',
        
    ];
    

    public function products(): HasMany
    {
        return $this->belongsToMany(Product::class);
    }
}


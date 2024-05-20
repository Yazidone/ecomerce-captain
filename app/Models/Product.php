<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

    // name	description	price	discount	image	code_barre	quantity	category_id
        // data base table
        'name',
        'description',
        'price',
        'discount',
        'image',
        'code_barre',
        'category_id',

     
    
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function clientOrders()
    {
        return $this->belongsToMany(Client::class);
    }
    //comments many to many

    public function clientComments()
    {
        return $this->belongsToMany(Client::class);
    }
};
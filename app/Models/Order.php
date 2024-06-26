<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{				
    protected $fillable = [
        'client_id',
        // 'product_id',
        // 'quantity',
        'shopping_method',
        'delvery_address',
        'telephone',
        'total',
        'status',
    ];
    use HasFactory;
    
    public function client() {
    	return $this->belongsTo('App\Models\Client');
    } 
    // public function product(){
    // 	return $this->belongsTo('App\Models\Product','product_id');
    // }  
    public function product(){//order_product many to many
        return $this->belongsToMany(Product::class)->withPivot('quantity')->withPivot('price');
    }
}

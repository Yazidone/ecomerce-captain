<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [

        // name	description	price	discount	image	code_barre	quantity	category_id
            // data base table
            'name',
            'product_id', 
        
        ];
        public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

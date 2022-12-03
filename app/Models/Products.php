<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey="ProductID";

    public function getSupplier(){
        return $this->belongsTo(Supplier::class,'SupplierID');
    }
    public function getCategory(){
        return $this->belongsTo(Category::class,'CategoryID');
    }
}

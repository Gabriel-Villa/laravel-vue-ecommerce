<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $primaryKey = 'cart_id';

    protected $fillable = [
        'productId', 'userId', 'qty', 'price'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'product_id', 'productId');
    }

    public function scopeById($query, $cart_id)
    {
        return $query->where('cart.cart_id', $cart_id);
    }

    public function scopeByUser($query, $user_id)
    {
        return $query->where('cart.userId', $user_id);
    }

    public function scopeByProduct($query, $product_id)
    {
        return $query->where('cart.productId', $product_id);
    }

}

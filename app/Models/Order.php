<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'name',
        'phone',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }

        return $sum;
    }

    public function saveOrder($name, $phone)
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            // $this->sum = $this->getFullSum();

            // $skus = $this->skus;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
        // foreach ($skus as $skuInOrder) {
        //     $this->skus()->attach($skuInOrder, [
        //         'count' => $skuInOrder->countInOrder,
        //         'price' => $skuInOrder->price,
        //     ]);
        // }

        // session()->forget('order');
        // return true;
    }
}

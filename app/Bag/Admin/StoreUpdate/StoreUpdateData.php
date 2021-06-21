<?php

namespace App\Bag\Admin\StoreUpdate;

use App\Models\Stock;
use App\Models\ProductVariation;

class StoreUpdateData
{
  public function categoryStoreUpdate($product, $request)
  {
    $product->name = $request['name'];
    $product->price = $request['price'];
    $product->icon = $request['icon'];
    $product->parent_id = $request['parent_id'];
  }
  public function orderStoreUpdate($product, $request)
  {
    $product->address_id = $request['address_id'];
    $product->shipping_method_id = $request['shipping_method_id'];
    $product->payment_method_id = $request['payment_method_id'];
    $product->subtotal = $request['subtotal'];
  }
  public function contactStoreUpdate($product, $request)
  {
    $product->address1 = $request['address1'];
    $product->address2 = $request['address2'];
    $product->phone = $request['phone'];
    $product->email = $request['email'];
  }


  public function courseStoreUpdate($product, $request)
  {
    $product->heading = $request['heading'];
    $product->description = $request['description'];
  }
  public function serviceStoreUpdate($product, $request)
  {
    $product->heading = $request['heading'];
    $product->description = $request['description'];
  }
  public function sliderStoreUpdate($product, $request)
  {
    $product->heading = $request['heading'];
  }
}

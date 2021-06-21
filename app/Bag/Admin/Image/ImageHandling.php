<?php

namespace App\Bag\Admin\Image;

use Illuminate\Support\Str;
use App\Models\ProductImage;
use Intervention\Image\Facades\Image;

class ImageHandling
{
  public function uploadImage($product,$request,$model){
    $image = $request->file("thumbnail");
    if ($image) {
      if (file_exists(substr($product->thumbnail,22,100))) {
          unlink(substr($product->thumbnail,22,100));
        }
      $image_ext = $image->getClientOriginalExtension();
      $image_full_name =$product->id.'.'. Str::random(10). "." . $image_ext;
      $upload_path = "images/".$model."/thumbnail/" . $image_full_name;
      Image::make($request->file('thumbnail'))->save($upload_path);
      $product->thumbnail = asset($upload_path);
    }
   }
}

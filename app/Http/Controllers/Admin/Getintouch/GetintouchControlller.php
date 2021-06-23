<?php

namespace App\Http\Controllers\Admin\Getintouch;

use App\Models\Getintouch;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Getintouch\GetintouchInputRequest;

class GetintouchControlller extends Controller
{
    public function index()
    {
      $datas = Getintouch::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'getintouch';
      $columns = Getintouch::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = Getintouch::where('address1', 'LIKE', "%" . request('query') . "%")
        ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = Getintouch::columns();
      $model = 'getintouch';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
        // dd('hfd');
      $data = '';
      $columns = Getintouch::create_columns();
      $model = 'getintouch';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(GetintouchInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
      // dd($request->all());
      $product = new Getintouch();
      $input->getintouchStoreUpdate($product, $request);
      $product->slug = Str::uuid();
      $imageHandling->uploadImage($product, $request, 'getintouch');
  
      $product->save();
      return redirect('admin/getintouch')
        ->withSuccess('Getintouch Created Successfully');
    }
    public function edit($slug)
    {
      $data = Getintouch::where('slug', $slug)->firstOrFail();
      $columns = Getintouch::edit_columns();
      $model = 'getintouch';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(GetintouchInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
      // dd($request->size_id);
      $product = Getintouch::where('slug', $slug)
        ->firstOrFail();
  
      $input->getintouchStoreUpdate($product, $request);
      $imageHandling->uploadImage($product, $request, 'getintouch');
      $product->update();
      return back()->withSuccess('Getintouch Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->getintouchDelete($slug);
      $datas = Getintouch::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = Getintouch::columns();
      $model = 'getintouch';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

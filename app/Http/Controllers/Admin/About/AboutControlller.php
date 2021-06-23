<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\About\AboutInputRequest;

class AboutControlller extends Controller
{
    public function index()
    {
      $datas = About::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'about';
      $columns = About::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = About::where('address1', 'LIKE', "%" . request('query') . "%")
        ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = About::columns();
      $model = 'about';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
      $data = '';
      $columns = About::create_columns();
      $model = 'about';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(AboutInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
    //   dd($request->all());
      $product = new About();
      $input->aboutStoreUpdate($product, $request);
      $product->slug = Str::uuid();
      $imageHandling->uploadImage($product, $request, 'service');
  
      $product->save();
      return redirect('admin/view/service')
        ->withSuccess('About Created Successfully');
    }
    public function edit($slug)
    {
      $data = About::where('slug', $slug)->firstOrFail();
      $columns = About::edit_columns();
      $model = 'about';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(AboutInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
      // dd($request->size_id);
      $product = About::where('slug', $slug)
        ->firstOrFail();
  
      $input->aboutStoreUpdate($product, $request);
      $imageHandling->uploadImage($product, $request, 'support');
      $product->update();
      return back()->withSuccess('About Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->aboutDelete($slug);
      $datas = About::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = About::columns();
      $model = 'about';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

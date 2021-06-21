<?php

namespace App\Http\Controllers\Admin\Service;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Service\ServiceInputRequest;

class ServiceControlller extends Controller
{
    public function view()
    {
      $datas = Service::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'service';
      $columns = Service::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = Service::where('address1', 'LIKE', "%" . request('query') . "%")
        ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = Service::columns();
      $model = 'service';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
      $data = '';
      $columns = Service::create_columns();
      $model = 'service';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(ServiceInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
      // dd($request->all());
      $product = new Service();
      $input->serviceStoreUpdate($product, $request);
      $product->slug = Str::uuid();
      $imageHandling->uploadImage($product, $request, 'service');
  
      $product->save();
      return redirect('admin/view/service')
        ->withSuccess('Service Created Successfully');
    }
    public function edit($slug)
    {
      $data = Service::where('slug', $slug)->firstOrFail();
      $columns = Service::edit_columns();
      $model = 'service';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(ServiceInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
      // dd($request->size_id);
      $product = Service::where('slug', $slug)
        ->firstOrFail();
  
      $input->serviceStoreUpdate($product, $request);
      $imageHandling->uploadImage($product, $request, 'service');
      $product->update();
      return back()->withSuccess('Service Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->serviceDelete($slug);
      $datas = Service::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = Service::columns();
      $model = 'service';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

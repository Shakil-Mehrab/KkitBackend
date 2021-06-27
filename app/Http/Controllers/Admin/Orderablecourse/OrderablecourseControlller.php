<?php

namespace App\Http\Controllers\Admin\Orderablecourse;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Orderablecourse;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Orderablecourse\OrderablecourseInputRequest;

class OrderablecourseControlller extends Controller
{
    public function index()
    {
      $datas = Orderablecourse::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'orderablecourse';
      $columns = Orderablecourse::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = Orderablecourse::where('address1', 'LIKE', "%" . request('query') . "%")
        ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = Orderablecourse::columns();
      $model = 'orderablecourse';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
        // dd('hfd');
      $data = '';
      $columns = Orderablecourse::create_columns();
      $model = 'orderablecourse';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(OrderablecourseInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
      // dd($request->all());
      $product = new Orderablecourse();
      $input->orderablecourseStoreUpdate($product, $request);
      $product->slug = Str::uuid();
      $imageHandling->uploadImage($product, $request, 'orderablecourse');
  
      $product->save();
      return redirect('admin/orderablecourse')
        ->withSuccess('Orderablecourse Created Successfully');
    }
    public function edit($slug)
    {
      $data = Orderablecourse::where('slug', $slug)->firstOrFail();
      $columns = Orderablecourse::edit_columns();
      $model = 'orderablecourse';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(OrderablecourseInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
      // dd($request->size_id);
      $product = Orderablecourse::where('slug', $slug)
        ->firstOrFail();
  
      $input->orderablecourseStoreUpdate($product, $request);
      $imageHandling->uploadImage($product, $request, 'orderablecourse');
      $product->update();
      return back()->withSuccess('Orderablecourse Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->orderablecourseDelete($slug);
      $datas = Orderablecourse::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = Orderablecourse::columns();
      $model = 'orderablecourse';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

<?php

namespace App\Http\Controllers\Admin\Support;

use App\Models\Support;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Support\SupportInputRequest;

class SupportControlller extends Controller
{
    public function index()
    {
      $datas = Support::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'support';
      $columns = Support::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = Support::where('address1', 'LIKE', "%" . request('query') . "%")
        ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = Support::columns();
      $model = 'support';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
      $data = '';
      $columns = Support::create_columns();
      $model = 'support';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(SupportInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
      // dd($request->all());
      $product = new Support();
      $input->supportStoreUpdate($product, $request);
      $product->slug = Str::uuid();
      $imageHandling->uploadImage($product, $request, 'support');
  
      $product->save();
      return redirect('admin/support')
        ->withSuccess('Support Created Successfully');
    }
    public function edit($slug)
    {
      $data = Support::where('slug', $slug)->firstOrFail();
      $columns = Support::edit_columns();
      $model = 'support';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(SupportInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
      // dd($request->size_id);
      $product = Support::where('slug', $slug)
        ->firstOrFail();
  
      $input->serviceStoreUpdate($product, $request);
      $imageHandling->uploadImage($product, $request, 'support');
      $product->update();
      return back()->withSuccess('support Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->supportDelete($slug);
      $datas = Support::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = Support::columns();
      $model = 'support';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

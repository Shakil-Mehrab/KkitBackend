<?php

namespace App\Http\Controllers\Admin\Counselling;

use App\Models\Counselling;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Counselling\CounsellingInputRequest;

class CounsellingControlller extends Controller
{
    public function index()
    {
      $datas = Counselling::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'counselling';
      $columns = Counselling::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = Counselling::where('address1', 'LIKE', "%" . request('query') . "%")
        ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = Counselling::columns();
      $model = 'counselling';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
        // dd('hfd');
      $data = '';
      $columns = Counselling::create_columns();
      $model = 'counselling';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(CounsellingInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
      // dd($request->all());
      $product = new Counselling();
      $input->counsellingStoreUpdate($product, $request);
      $product->slug = Str::uuid();
      $imageHandling->uploadImage($product, $request, 'counselling');
  
      $product->save();
      return redirect('admin/counselling')
        ->withSuccess('Counselling Created Successfully');
    }
    public function edit($slug)
    {
      $data = Counselling::where('slug', $slug)->firstOrFail();
      $columns = Counselling::edit_columns();
      $model = 'counselling';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(CounsellingInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
      // dd($request->size_id);
      $product = Counselling::where('slug', $slug)
        ->firstOrFail();
  
      $input->counsellingStoreUpdate($product, $request);
      $imageHandling->uploadImage($product, $request, 'counselling');
      $product->update();
      return back()->withSuccess('Counselling Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->counsellingDelete($slug);
      $datas = Counselling::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = Counselling::columns();
      $model = 'counselling';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

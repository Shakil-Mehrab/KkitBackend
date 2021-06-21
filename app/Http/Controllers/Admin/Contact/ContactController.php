<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Contact\ContactInputRequest;

class ContactController extends Controller
{
  public function view()
  {
    $datas = Contact::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $model = 'contact';
    $columns = Contact::columns();

    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }

  public function search()
  {
    $datas = Contact::where('address1', 'LIKE', "%" . request('query') . "%")
      ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
      ->searchPagination(request('per-page'));
    $columns = Contact::columns();
    $model = 'contact';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
  }
  public function create()
  {
    $data = '';
    $columns = Contact::create_columns();
    $model = 'contact';
    return view('layouts.data.create', compact('data', 'columns', 'model'));
  }
  public function store(ContactInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
  {
    // dd($request->all());
    $product = new Contact();
    $input->contactStoreUpdate($product, $request);
    $product->slug = Str::uuid();
    $imageHandling->uploadImage($product, $request, 'contact');

    $product->save();
    return redirect('admin/view/contact')
      ->withSuccess('Contact Created Successfully');
  }
  public function edit($slug)
  {
    $data = Contact::where('slug', $slug)->firstOrFail();
    $columns = Contact::edit_columns();
    $model = 'contact';
    return view('layouts.data.edit', compact('data', 'columns', 'model'));
  }
  public function update(ContactInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
  {
    // dd($request->size_id);
    $product = Contact::where('slug', $slug)
      ->firstOrFail();

    $input->contactStoreUpdate($product, $request);
    $imageHandling->uploadImage($product, $request, 'contact');
    $product->update();
    return back()->withSuccess('Contact Updated Successfully');;
  }
  public function delete(DeleteData $delete, $slug)
  {
    $delete->contactDelete($slug);
    $datas = Contact::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Contact::columns();
    $model = 'contact';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}

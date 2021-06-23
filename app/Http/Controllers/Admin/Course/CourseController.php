<?php

namespace App\Http\Controllers\Admin\Course;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Course\CourseInputRequest;

class CourseController extends Controller
{
    
  public function index()
  {
    $datas = Course::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $model = 'course';
    $columns = Course::columns();

    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }

  public function search()
  {
    $datas = Course::where('heading', 'LIKE', "%" . request('query') . "%")
      ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
      ->searchPagination(request('per-page'));
    $columns = Course::columns();
    $model = 'course';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
  }
  public function create()
  {
    $data = '';
    $columns = Course::create_columns();
    $model = 'course';
    return view('layouts.data.create', compact('data', 'columns', 'model'));
  }
  public function store(CourseInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
  {
    $product = new Course();
    $input->courseStoreUpdate($product, $request);
    $product->slug = Str::uuid();
    $imageHandling->uploadImage($product, $request, 'course');

    $product->save();
    return redirect('admin/view/course')
      ->withSuccess('Course Created Successfully');
  }
  public function edit($slug)
  {
    $data = Course::where('slug', $slug)->firstOrFail();
    $columns = Course::edit_columns();
    $model = 'course';
    return view('layouts.data.edit', compact('data', 'columns', 'model'));
  }
  public function update(CourseInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
  {
    // dd($request->size_id);
    $product = Course::where('slug', $slug)
      ->firstOrFail();

    $input->courseStoreUpdate($product, $request);
    $imageHandling->uploadImage($product, $request, 'contact');
    $product->update();
    return back()->withSuccess('Course Updated Successfully');;
  }
  public function delete(DeleteData $delete, $slug)
  {
    $delete->courseDelete($slug);
    $datas = Course::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Course::columns();
    $model = 'course';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}

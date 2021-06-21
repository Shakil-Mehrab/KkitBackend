<?php

namespace App\Http\Controllers\Admin\Bulk;

use App\Models\User;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Models\Course;

class BulkController extends Controller
{
    public function delete(Request $request, DeleteData $delete)
    {

        if ($request['with_selected'] == 'delete') {
            if ($request['model'] == 'product') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->productDelete($slug);
                }
                $datas = Product::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Product::columns();
            }  elseif ($request['model'] == 'category') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->catDelete($slug);
                }
                $datas = Category::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Category::columns();
            }
            elseif ($request['model'] == 'user') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->userDelete($slug);
                }
                $datas = User::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = User::columns();
            }
            elseif ($request['model'] == 'slider') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->sliderDelete($slug);
                }
                $datas = Slider::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Slider::columns();
            }
            elseif ($request['model'] == 'contact') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->contactDelete($slug);
                }
                $datas = Contact::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Contact::columns();
            }
            elseif ($request['model'] == 'course') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->courseDelete($slug);
                }
                $datas = Course::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Course::columns();
            }
            else{
                return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
            }
            $model = $request['model'];
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}

<?php

namespace App\Models\Traits\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Schema;

trait CourseColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Course::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['uuid','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Course::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Course::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
}

<?php

namespace App\Models\Traits\Getintouch;

use App\Models\Course;
use App\Models\Getintouch;
use App\Models\Counselling;
use Illuminate\Support\Facades\Schema;

trait GetintouchColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Getintouch::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['uuid','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Getintouch::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','description','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Getintouch::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','description','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
}

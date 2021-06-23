<?php

namespace App\Models\Traits\About;

use App\Models\About;
use Illuminate\Support\Facades\Schema;

trait AboutColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(About::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['uuid','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(About::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','description','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(About::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','description','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
}

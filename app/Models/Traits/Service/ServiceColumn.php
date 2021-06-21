<?php

namespace App\Models\Traits\Service;

use App\Models\Service;
use Illuminate\Support\Facades\Schema;

trait ServiceColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Service::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['uuid','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Service::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','description','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Service::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','slug','description','thumbnail','created_at','updated_at']);

            })
            ->toArray();
    }
}

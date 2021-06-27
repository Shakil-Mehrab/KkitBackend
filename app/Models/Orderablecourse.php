<?php

namespace App\Models;

use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Orderablecourse\Orderablecoursecolumn;

class Orderablecourse extends Model
{
    use HasFactory,PaginationTrait,Orderablecoursecolumn;
}

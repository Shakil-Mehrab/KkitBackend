<?php

namespace App\Models;

use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Getintouch\GetintouchColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Getintouch extends Model
{
    use HasFactory,PaginationTrait,GetintouchColumn;
}

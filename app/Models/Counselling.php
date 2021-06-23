<?php

namespace App\Models;

use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Counselling\CounsellingColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Counselling extends Model
{
    use HasFactory,PaginationTrait,CounsellingColumn;
}

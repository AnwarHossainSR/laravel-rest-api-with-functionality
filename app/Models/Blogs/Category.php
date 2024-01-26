<?php

namespace App\Models\Blogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BaseModel;

class Category extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'slug'];
}

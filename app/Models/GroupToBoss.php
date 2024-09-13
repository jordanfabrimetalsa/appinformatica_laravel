<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupToBoss extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'boss', 'employees'];
}

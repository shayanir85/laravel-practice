<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class genre extends Model
{
    protected $fillable =['name'];
    use HasFactory;
}

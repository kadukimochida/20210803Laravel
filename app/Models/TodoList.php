<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = [
        'content' => 'required|max:20'
    ];
}

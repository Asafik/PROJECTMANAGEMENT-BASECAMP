<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_lists extends Model
{
    use HasFactory;

    protected $fillable= [
        'project_id','tile','list_description'
    ];

    protected $guarded =[
        'id','created_at','updated_at'
    ];
    
}

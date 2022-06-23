<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_tasks extends Model
{
    use HasFactory;
    
    protected $fillable= [
        'project_list_id','title_task','description_task','start_date','due_date','status','priority',
    ];
    protected $guarded =[
        'id','created_at','updated_at'
    ];
    
}

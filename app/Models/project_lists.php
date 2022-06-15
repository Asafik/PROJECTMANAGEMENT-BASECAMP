<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_lists extends Model
{
    use HasFactory;

    protected $fillable= [
        'tile','list_description'
    ];

    protected $guarded =[
        'id','project_id','created_at','updated_at'
    ];

    public function project(){
        return $this->hasMany(projects::class);
    }


    
}

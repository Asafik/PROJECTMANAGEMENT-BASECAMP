<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_grup extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'group_name',
        'group_description'
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    public function project(){
        return $this->hasMany(projects::class,);
    }
}

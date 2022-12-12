<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeboard extends Model
{
    use HasFactory;


    protected $table   = 'timeboard';

    protected $fillable= ['Time Worked','Doing','Date','By','Status'];

    protected $guarded =['id','created_at','updated_at'];

}

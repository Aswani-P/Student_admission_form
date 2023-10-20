<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','gender','dob','caste','nationality','parent','address','conatct','email','examination','register','yearofpassing','institution','state','photo','certificate','adhar'
    ];
    protected $table = 'details'; // if the table name is different

    public function mark()
    {
        return $this->hasOne(Mark::class);
    }
}


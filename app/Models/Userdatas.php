<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdatas extends Model
{
    use HasFactory;

    protected $table='userdatas';
    protected $primaryKey='id';
    protected $fillable=['name','email','address','phone','imagepath'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDatas extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='user_datas';
    protected $primaryKey='id';
    protected $=true;
    protected $fillable=['name','email','address','phone','imagepath'];
}

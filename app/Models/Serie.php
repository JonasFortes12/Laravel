<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Eloquent ORM search the name of the class 'Serie' as map to BD table
class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
}

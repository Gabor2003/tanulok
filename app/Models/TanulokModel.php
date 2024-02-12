<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanulokModel extends Model
{
    //use HasFactory;
    protected $table="ujtanulok";
    protected $primaryKey="id";
    protected $fillable=['omazonosito','nev','lahely','szulido'];
}

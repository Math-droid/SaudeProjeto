<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logintb extends Model
{
    use HasFactory;
    protected $fillable = ['idLogin','nomeFK','emailFK','senhaFK'];
}

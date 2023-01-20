<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    // protected $fillable = ['scrivo tutte le colonne che posso fillare'];
    protected $guarded = ['price'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    // public $table = "peminjamen";
    protected $fillable = [
        'DateBorrowed',
        'title',
        'DueDate'
    ];

    protected $guarded = [

    ];
}

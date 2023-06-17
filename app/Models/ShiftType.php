<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'extra'
    ];

    public $cast = [
        'extra' => 'array'
    ];
}

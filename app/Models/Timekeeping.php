<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timekeeping extends Model
{
    use HasFactory;
    protected $table = 'timekeepings';
    protected $fillable = [
        'employee_id',
        'date',
        'checked_in_at',
    ] ;
    protected $casts = [
        'checked_in_at' => 'array'
    ];
}

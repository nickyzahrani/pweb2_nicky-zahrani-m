<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaModel extends Model
{
    use HasFactory;

    protected $table = 'tblpenyewa';
    protected $guarded = [];
}

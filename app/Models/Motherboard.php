<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motherboard extends Model
{
    use HasFactory, SoftDeletes;
	
	protected $hidden = [
        
    ];

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}

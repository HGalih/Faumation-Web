<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    use HasFactory;
    protected $table = 'temperatures';
    protected $fillable = [
        'user_id',
        'current_temperature',
    ];

    public function temperature()
    {
        return $this->belongsTo(Tool::class, 'tool_id', 'id');
    }
}



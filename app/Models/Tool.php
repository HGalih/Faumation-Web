<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    protected $table = 'tools';

    protected $fillable = [
        'user_id',
        'description',
    ];

    public function tool()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function usage()
    {
        return $this->hasMany(usage::class, 'tool_id', 'id_usage');
    }
    public function temperature()
    {
        return $this->hasMany(usage::class, 'tool_id', 'id');
    }
}

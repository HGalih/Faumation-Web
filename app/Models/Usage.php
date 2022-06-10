<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    use HasFactory;

    protected $table = 'usages';

    protected $primaryKey = 'id_usage';

    protected $fillable = [
        'user_id',
        'water_remaining',
    ];

    public function tool()
    {
        return $this->belongsTo(Tool::class, 'tool_id', 'id');
    }
}

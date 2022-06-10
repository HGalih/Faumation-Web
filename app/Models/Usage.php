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
        'usage_amount',
        'usage_time'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

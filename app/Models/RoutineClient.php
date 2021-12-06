<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutineClient extends Model
{
    protected $table = 'routine_clients';
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'routine_client_id'
    ];
}

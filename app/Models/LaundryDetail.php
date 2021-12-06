<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryDetail extends Model
{
    protected $table = 'laundry_details';
    use HasFactory;

    protected $fillable = [
        'routine_client_id',
        'quantity',
        'selected_machines',
        'issued_by'
    ];
}

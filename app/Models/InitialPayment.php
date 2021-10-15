<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitialPayment extends Model
{
    protected $table = 'initial_payments';
    use HasFactory;

    protected $fillable = [
        'laundry_cost_id',
        'initial_payment'
    ];

    public function laundry_cost(){
        return $this->belongsTo(LaundryCost::class);
    }
}

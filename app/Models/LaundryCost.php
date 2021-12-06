<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryCost extends Model
{
    protected $table = 'laundry_costs';
    use HasFactory;

    protected $fillable = [
      'laundry_details_id',
      'amount',
      'payment_status'
    ];

    public function initial_payment(){
        return $this->hasOne(InitialPayment::class);
    }

}

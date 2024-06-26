<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MandatorySaving extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'customer_id', 'amount'];
    /*
     * 1 Nasabah / Customer punya banyak Simpanan / Mandatory Savings (has many)
     * 1 Simpanan kepunyaan 1 nasabah (belongsTo)
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}

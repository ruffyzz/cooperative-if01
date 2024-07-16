<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'code',
    //     'name',
    //     'phone',
    //     'address'
    // ];
    protected $guarded = ['id'];
     /*
     * 1 Nasabah / Customer punya banyak Simpanan / Mandatory Savings (has many)
     * 1 Simpanan kepunyaan 1 nasabah (belongsTo)
     */
    public function mandatorySavings()
    {
        return $this->hasMany(MandatorySaving::class, 'customer_id');
    }
    public function user()
    {
        return $this->belongsTo(MandatorySaving::class);
    }
}

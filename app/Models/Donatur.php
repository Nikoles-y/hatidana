<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name', 'notes', 'fundraising_Id', 'total_amount', 'is_paid', 'proof',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donatur extends Model
{
    //
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name', 'notes', 'fundraising_Id', 'total_amount', 'is_paid', 'proof',
    ];
}

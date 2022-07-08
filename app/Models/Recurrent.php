<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recurrent extends Transaction
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'amount',
        'category_id',
        'user_id',
    ];
}

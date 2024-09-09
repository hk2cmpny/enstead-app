<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'date_from',
        'date_to',
        'is_half',
        'approved_by',
        'approved_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'date_from' => 'date',
        'date_to' => 'date',
        'is_half' => 'boolean',
        'approved_by' => 'integer',
        'approved_date' => 'date',
    ];
}

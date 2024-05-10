<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    protected $fillable = ['concert_id', 'name', 'email', 'updated_at', 'created_at'];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
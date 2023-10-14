<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function incomes()
    {
        return $this->hasMany(Income::class, 'client_id', 'id');
    }
}

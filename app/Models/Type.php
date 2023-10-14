<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function incomes()
    {
        return $this->belongsToMany(Income::class, 'income_types', 'type_id', 'income_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitUmfrage extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructionsClear',
        'confidence',
        'chessboardSpeed',
        'pre_game',
        'in_game',
        'after_game',
        'unique_id',
        'condition',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'beurteilt',
        'beurteiler1_yesno',
        'beurteiler2_yesno',
        'beurteiler1_scaled',
        'beurteiler2_scaled',
        'rating',
        'answer',
        'participant_id',
        'expertise',
        'fascination',
        'zuversichtlich',
        'fromwhere',
    ];
}

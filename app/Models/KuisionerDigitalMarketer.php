<?php

// app/Models/KuisionerDigitalMarketer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KuisionerDigitalMarketer extends Model
{
    protected $table = 'kuisionerdigitalmarketer';

    protected $fillable = [
        'user_name',
        'user_email',
        'tujuan',
        'tantangan',
        'social_commerce',
    ];

    protected $casts = [
        'tantangan' => 'array',
    ];
}
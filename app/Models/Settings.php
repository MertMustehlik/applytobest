<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'favicon',
        'whatsapp',
        'whatsappDurum',
        'linkedin',
        'linkedinDurum',
        'instagram',
        'instagramDurum',
        'phone',
        'phoneDurum',
        'mail',
        'mailDurum',
        'created_at',
        'updated_at'
    ];
}

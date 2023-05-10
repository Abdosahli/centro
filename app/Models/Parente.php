<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $primaryKey = 'id_parent';

    protected $fillable = [
        'p_CIN',
        'p_image',
        'p_fname',
        'p_lname',
        'p_gender',
        'p_occupation',
        'p_address',
        'p_phone',
        'p_email'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    
}

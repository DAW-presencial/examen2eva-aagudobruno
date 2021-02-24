<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = [
        'companyName',
        'docType',
        'dni',
        'tutorName',
        'tutorSurname1',
        'tutorSurname2',
        'dniCountry',
        'province',
        'municipi',
        'status',
        'tlf',
        'email'
    ];
}

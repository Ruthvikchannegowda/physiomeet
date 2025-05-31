<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookConsultant extends Model
{
    //
    protected $table = 'book_consultant';

    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'gender',
        'medical_information',
    ];
}

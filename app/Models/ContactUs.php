<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    //
    
      protected $tabel="contact_us";

      protected $fillable = [
        'full_name', 'phone_number', 'gender', 'email', 'medical_description'
      ];
}

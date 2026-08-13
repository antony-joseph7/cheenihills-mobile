<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomFormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_type',
        'name',
        'email',
        'mobile',
        'company',
        'message',
        'custom_fields',
        'ip_address',
    ];

}

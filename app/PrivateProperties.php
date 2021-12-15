<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateProperties extends Model
{
    protected $fillable = [
        'id', 'property_name', 'top_year', 'district_no', 'units_count',
    ];
}

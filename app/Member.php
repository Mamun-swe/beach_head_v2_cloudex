<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'region',
        'name',
        'city',
        'advisory_exp_1',
        'advisory_exp_2',
        'advisory_exp_3',
        'mrkets_1',
        'mrkets_2',
        'mrkets_3',
        'sector_1',
        'sector_2',
        'sector_3',
        'founder_ceo_exp',
        'govt_regulatory_exp',
        'years_of_experience',
        'nz_working_experience',
        'profile_url',
    ];
}

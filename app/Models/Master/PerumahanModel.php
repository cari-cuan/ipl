<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class PerumahanModel extends Model
{
    protected $table = 'residentials';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'report_date',
        'bank_account_number',
        'bank_name',
        'bank_account_name',
        'created_at',
        'updated_at',
    ];
}

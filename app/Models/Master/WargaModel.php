<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class WargaModel extends Model
{
    protected $table = 'warga';

    protected $fillable = [
        'warga_id',
        'warga_nama',
        'warga_email',
        'warga_wa',
        'warga_perumahan',
        'warga_blok',
        'warga_no',
        'warga_tgl_daftar',
        'warga_password',
        'warga_status',
        'warga_reset_token',
    ];
}

<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentialAreaModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResidentModel extends Model
{
    protected $table = 'residents';

    protected $fillable = [
        'id',
        'residential_area_id',
        'name',
        'email',
        'phone',
        'ktp_number',
        'is_owner',
        'join_date',
        'status',
        'created_at',
        'updated_at',
    ];

    public function residentialArea(): BelongsTo
    {
        return $this->belongsTo(ResidentialAreaModel::class, 'residential_area_id');
    }
}

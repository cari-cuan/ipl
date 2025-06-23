<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentialAreaModel;
use App\Models\Master\HousingUnitModel;
use App\Models\Master\ResidentPaymentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function housingUnits()
    {
        return $this->hasMany(HousingUnitModel::class, 'resident_id');
    }

    public function residentPayment(): HasMany
    {
        return $this->hasMany(ResidentPaymentModel::class, 'resident_id');
    }
}

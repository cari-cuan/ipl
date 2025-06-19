<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentModel;
use App\Models\Master\HousingUnitModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResidentialAreaModel extends Model
{
    protected $table = 'residential_areas';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'postal_code',
        'created_at',
        'updated_at',
    ];

    public function residents(): HasMany
    {
        return $this->hasMany(ResidentModel::class, 'residential_area_id');
    }

    public function housingUnits()
    {
        return $this->hasMany(HousingUnitModel::class, 'residential_area_id');
    }
}

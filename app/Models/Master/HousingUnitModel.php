<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentialAreaModel;
use App\Models\Master\ResidentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HousingUnitModel extends Model
{
    protected $table = 'housing_units';

    protected $fillable = [
        'id',
        'residential_area_id',
        'resident_id',
        'unit_code',
        'block',
        'floor_area',
        'ownership_status',
        'created_at',
        'updated_at',
    ];

    public function residentialArea(): BelongsTo
    {
        return $this->belongsTo(ResidentialAreaModel::class, 'residential_area_id');
    }

    public function resident(): BelongsTo
    {
        return $this->belongsTo(ResidentModel::class, 'resident_id');
    }
}

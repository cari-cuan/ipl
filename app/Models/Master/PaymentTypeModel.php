<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentPaymentModel;
use App\Models\Master\ResidentialAreaModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentTypeModel extends Model
{
    protected $table = 'payment_types';

    protected $fillable = [
        'id',
        'residential_area_id',
        'name',
        'is_recurring',
        'cut_off_date',
        'description',
        'created_at',
        'updated_at',
    ];

    public function residentPayment(): HasMany
    {
        return $this->hasMany(ResidentPaymentModel::class, 'payment_type_id');
    }

    public function residentialArea(): BelongsTo
    {
        return $this->belongsTo(ResidentialAreaModel::class, 'residential_area_id');
    }
}

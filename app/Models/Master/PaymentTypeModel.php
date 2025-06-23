<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentPaymentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentTypeModel extends Model
{
    protected $table = 'payment_types';

    protected $fillable = [
        'id',
        'name',
        'is_recurring',
        'description',
        'created_at',
        'updated_at',
    ];

    public function residentPayment(): HasMany
    {
        return $this->hasMany(ResidentPaymentModel::class, 'payment_type_id');
    }
}

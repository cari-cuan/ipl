<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ResidentModel;
use App\Models\Master\PaymentTypeModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResidentPaymentModel extends Model
{
    protected $table = 'resident_payments';

    protected $fillable = [
        'id',
        'resident_id',
        'payment_type_id',
        'payment_date',
        'amount',
        'payment_month',
        'payment_status',
        'notes',
        'event_name',
        'created_at',
        'updated_at',
    ];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(ResidentModel::class, 'resident_id');
    }

    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(PaymentTypeModel::class, 'payment_type_id');
    }
}

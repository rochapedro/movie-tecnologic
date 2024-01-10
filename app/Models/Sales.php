<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = ['sale_date', 'warranty_period', 'serial_number', 'model_id'];

    public function models(): BelongsTo
    {
        return $this->belongsTo(Models::class);
    }
}

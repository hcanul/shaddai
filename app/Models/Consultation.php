<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consultation extends Model
{
    protected $fillable = [ 'expediente_id', 'peso', 'talla', 'fc', 'fr', 'temp', 'ca', 'so2', 'ta', 'imc', 'observaciones',  'txn', 'dxn', 'observacionesmg', 'txmg', 'dxmg', 'observacionesft', 'txft', 'dxft', 'observacionesod', 'txod', 'dxod', 'permitiooracion', 'interesoracion', 'espcialidadintesada', 'observaciones2', 'dxtx'];


    public function expediente(): BelongsTo
    {
        return $this->belongsTo(Expediente::class);
    }
}

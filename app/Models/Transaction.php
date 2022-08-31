<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

   /**
    * Get the wallet that owns the Transaction
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function wallet(): BelongsTo
   {
       return $this->belongsTo(Wallet::class);
   }
}

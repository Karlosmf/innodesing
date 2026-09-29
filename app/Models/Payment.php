<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = ['client_id','invoice_id','amount','currency','method','status','provider_id','paid_at','notes'];
    protected $casts = ['amount'=>'decimal:2','paid_at'=>'datetime'];
    public function client(): BelongsTo { return $this->belongsTo(Client::class); }
    public function invoice(): BelongsTo { return $this->belongsTo(Invoice::class); }
}

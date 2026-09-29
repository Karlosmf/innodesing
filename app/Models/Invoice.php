<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $fillable = ['client_id','number','issue_date','due_date','subtotal','tax','total','currency','status','pdf_path','notes'];
    protected $casts = ['issue_date'=>'date','due_date'=>'date','subtotal'=>'decimal:2','tax'=>'decimal:2','total'=>'decimal:2'];
    public function client(): BelongsTo { return $this->belongsTo(Client::class); }
    public function payments(): HasMany { return $this->hasMany(Payment::class); }
}

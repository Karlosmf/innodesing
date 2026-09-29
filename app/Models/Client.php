<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    protected $fillable = ['name','email','phone','company','cuit','address','status','notes','user_id'];
    protected $casts = ['status' => 'string'];

    public function leads(): HasMany { return $this->hasMany(Lead::class); }
    public function invoices(): HasMany { return $this->hasMany(Invoice::class); }
    public function payments(): HasMany { return $this->hasMany(Payment::class); }
    public function user(): BelongsTo { return $this->belongsTo(User::class); }
}

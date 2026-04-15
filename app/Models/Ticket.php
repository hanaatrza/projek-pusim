<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ticket_number',
        'judul',
        'kategori',
        'deskripsi',
        'lampiran',
        'status',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'menunggu',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            // Auto generate ticket number
            $latestId = static::max('id') ?? 0;
            $ticket->ticket_number = '#REQ-' . (10000 + $latestId + 1);
        });
    }
}

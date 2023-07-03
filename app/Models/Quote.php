<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'real_publication_year',
        'author',
        'message',
    ];

    protected $casts = [
        'real_publication_year' => 'date'
        ];
       

    public function owner(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}

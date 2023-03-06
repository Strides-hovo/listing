<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];

    public function images(): Attribute
    {
        return Attribute::make(
            get:fn($value) => json_decode($value, 1),
            set:fn($value) => json_encode($value, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK),
        );
    }

    public function fields(): Attribute
    {
        return Attribute::make(
            get:fn($value) => json_decode($value, 1),
            set:fn($value) => json_encode($value, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK),
        );
    }

    /**
     * Relations
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

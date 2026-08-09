<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'subcategory_id',
        'store_id',
        'name',
        'slug',
        'description',
        'images',
        'price',
        'old_price',
        'affiliate_url',
        'is_active',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'images' => 'array',
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function getFirstImageAttribute(): ?string
    {
        return $this->images[0] ?? null;
    }

    public function getDiscountPercentageAttribute(): ?int
    {
        if (
            !$this->old_price ||
            !$this->price ||
            $this->old_price <= $this->price
        ) {
            return null;
        }

        return (int) round(
            (($this->old_price - $this->price) / $this->old_price) * 100
        );
    }
}
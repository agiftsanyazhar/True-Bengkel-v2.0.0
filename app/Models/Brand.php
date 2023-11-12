<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the motor for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function motor(): HasMany
    {
        return $this->hasMany(Motor::class);
    }

    /**
     * Get all of the sparePart for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sparePart(): HasMany
    {
        return $this->hasMany(SparePart::class);
    }

    /**
     * Get all of the kendaraan for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kendaraan(): HasMany
    {
        return $this->hasMany(Kendaraan::class);
    }
}

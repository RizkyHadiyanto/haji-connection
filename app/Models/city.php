<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class city extends Model
{
    use HasFactory;
    protected $table = "city";
    protected $fillable = [
        'codecity',
        'name'
    ];

    public function tblbpkh(): HasMany
    {
        return $this->hasMany(tblbpkh::class, 'cityid', 'codecity');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class education extends Model
{
    use HasFactory;
    protected $table = "education";
    protected $fillable = [
        'codeeducation',
        'name'
    ];

    public function tblbpkh(): HasMany
    {
        return $this->hasMany(tblbpkh::class, 'educationid', 'codeeducation');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class job extends Model
{
    use HasFactory;
    protected $table = "job";
    protected $fillable = [
        'codejob',
        'name'
    ];

    public function tblbpkh(): HasMany
    {
        return $this->hasMany(tblbpkh::class, 'jobid', 'codejob');
    }
}

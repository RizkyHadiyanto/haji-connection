<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tblbpkh extends Model
{
    use HasFactory;
    protected $table = "tblbpkh";

    public function city(): BelongsTo
    {
        return $this->belongsTo(city::class, 'cityid', 'codecity');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(job::class, 'jobid', 'codejob');
    }
    public function education(): BelongsTo
    {
        return $this->belongsTo(education::class, 'educationid', 'codeeducation');
    }
}

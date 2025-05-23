<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function reserves()
    {
        return $this->belongsTo(Patient::class, 'pat_id');
    }

}

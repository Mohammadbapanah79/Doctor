<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function expertise()
    {
        return $this->belongsTo(Expertise::class);
    }

    public function day()
    {
        return $this->hasOne(Day::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function doctors()
    {
        return $this->hasMany(Reserve::class);
    }

    public function doctorComments()
    {
        return $this->hasMany(DoctorComment::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}

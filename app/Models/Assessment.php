<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'apk_id', 'status_id'
    ];

    public function apk()
    {
        return $this->belongsTo(Apk::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function hosting_sub_domain()
    {
        return $this->hasOne(Hosting_sub_domain::class);
    }
}

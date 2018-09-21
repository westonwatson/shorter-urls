<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'hits',
    ];

    public function tally()
    {
        return $this->update([
            'hits' => $this->hits++
        ]);
    }

    public function getTokenAttribute()
    {
        return base64_encode($this->id);
    }
}

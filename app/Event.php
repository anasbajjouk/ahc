<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'date', 'detail', 'period_id'
    ];

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function scopeSearchByDate($query, $date)
    {
        return $query->where('date', "%". $date . "%");
    }
}

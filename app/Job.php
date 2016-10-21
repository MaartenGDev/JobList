<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name', 'url', 'description', 'city', 'address', 'postal','tags', 'pros', 'cons'
    ];

    public function getProsAttribute($value)
    {
        return array_map('trim', explode(',',$value));
    }

    public function getConsAttribute($value)
    {
        return array_map('trim', explode(',',$value));
    }

    public function getTagsAttribute($value)
    {
        return array_map('trim', explode(',',$value));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

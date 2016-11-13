<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name', 'url', 'description', 'city', 'address', 'postal'
    ];

    public function getProListAttribute()
    {
        $result = [];
        foreach($this->getProsAttribute() as $pro){
            $result[] = $pro->name;
        }
        return implode(', ', $result);
    }

    public function getConListAttribute()
    {
        $result = [];
        foreach($this->getConsAttribute() as $con){
            $result[] = $con->name;
        }
        return implode(', ', $result);
    }

    public function getTagListAttribute()
    {
        $result = [];
        foreach($this->getTagsAttribute() as $tag){
            $result[] = $tag->name;
        }


        return implode(', ', $result);
    }
    public function getProsAttribute()
    {
        return $this->tags()->where('tag_type_id', 1)->get();
    }

    public function getConsAttribute()
    {
        return $this->tags()->where('tag_type_id', 2)->get();
    }

    public function getTagsAttribute()
    {
        return $this->tags()->where('tag_type_id', 3)->get();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use App\Http\Traits\HelperTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory,HelperTrait;
    protected $guarded = ['id'];


    public function getImageAttribute($value)
    {
        if(!$value)
            return null;
        else
            return $this->image_full_path($value);
    }


    public function scopeActive($q)
    {
        return $q->whereStatus(1);
    }
    public function scopeSort($q)
    {
        return $q->orderBy('sort', 'asc');
    }

    public function scopeRetrieve($q)
    {
        return $q->select([
            'id',
            'name_'.app()->getLocale().' as name',
            'job_title_'.app()->getLocale().' as requirements',
            'description_'.app()->getLocale().' as long_description',
            'image'
        ]);
    }

}

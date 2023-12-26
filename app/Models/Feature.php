<?php

namespace App\Models;

use App\Http\Traits\HelperTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory,HelperTrait;
    protected $guarded = ['id'];

    public function getIconAttribute($value)
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
            'title_'.app()->getLocale().' as title',
            'short_description_'.app()->getLocale().' as short_description',
            'icon'
        ]);
    }

}

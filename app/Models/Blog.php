<?php

namespace App\Models;

use App\Http\Traits\HelperTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getCreatedAtAttribute($value)
    {
        $dt = Carbon::createFromDate($value);
        return $dt->toFormattedDateString();
    }

    public function scopeRetrieve($q)
    {
        return $q->select([
            'id',
            'category_id',
            'slug',
            'title_'.app()->getLocale().' as title',
            'short_description_'.app()->getLocale().' as short_description',
            'description_'.app()->getLocale().' as long_description',
            'image',
            'views',
            'tags',
            'created_at'
        ]);
    }
}

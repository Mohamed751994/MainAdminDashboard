<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

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
            'description_'.app()->getLocale().' as long_description'
        ]);
    }
}

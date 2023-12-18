<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public function scopeSort($q)
    {
        return $q->orderBy('id', 'asc');
    }

    public function scopeActive($q)
    {

    }

    public function scopeRetrieve($q)
    {
        return $q->select([
            'id',
            'title_'.app()->getLocale().' as title'
        ]);
    }


}

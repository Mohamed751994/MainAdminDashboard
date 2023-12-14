<?php

namespace App\Models;

use App\Http\Traits\HelperTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory,HelperTrait;
    protected $guarded = ['id'];

    public function getTypeAttribute($value)
    {
        $types = orderTypes();
        $label = '';
        for ($i=0; $i < count($types) ; $i++)
        {
            switch($value) {
                case($types[$i]['name']):
                    $label = '<span class="badge bg-light-'.$types[$i]['color'].' text-'.$types[$i]['color'].'">'.$types[$i]['name_ar'].'</span>';
                break;
                default:
                    $label = $types[$i]['name_ar'];
            }
            if($value == $types[$i]['name'])
            {
                return $label;
            }
        }
        return $label;

    }


    public function getSeenAttribute($value)
    {
        if($value == 1)
            return '<span class="text-success bg-light-success badge fs-5"><i class="lni lni-checkmark-circle"></i></span>';
        else
            return '<span class="text-danger bg-light-danger badge fs-5"><i class="lni lni-close"></i></span>';
    }

    public function getCvAttribute($value)
    {
        if(!$value)
            return null;
        else
            return $this->image_full_path($value);
    }

    public function relation()
    {
        if ($this->attributes['type'] == 'service')
            return $this->belongsTo(Service::class, 'type_id');
        elseif ($this->attributes['type'] == 'industry')
            return $this->belongsTo(Industry::class, 'type_id');
        elseif ($this->attributes['type'] == 'career')
            return $this->belongsTo(Career::class, 'type_id');
        elseif ($this->attributes['type'] == 'solution')
            return $this->belongsTo(Solution::class, 'type_id');
        else
            return $this->belongsTo(Career::class, 'type_id');
    }

}

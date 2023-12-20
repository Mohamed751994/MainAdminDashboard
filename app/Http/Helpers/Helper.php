<?php


if (!function_exists('assetURLFile')) {
    function assetURLFile($filename)
    {
        return asset('/uploads/'. $filename);
    }
}

if (!function_exists('StrLimit')) {
    function strLimit($attribute, $limit)
    {
        return \Illuminate\Support\Str::limit($attribute, $limit, $end='...');
    }
}

if (!function_exists('days')) {
    function days()
    {
        $timestamp = strtotime('next Sunday');
        $days = array();
        for ($i = 0; $i < 7; $i++) {
            $days[] = strftime('%A', $timestamp);
            $timestamp = strtotime('+1 day', $timestamp);
        }
        return $days;
    }
}

if (!function_exists('orderTypes')) {
    function orderTypes()
    {
        return [
            ['name' =>'contact', 'color'=>'primary', 'name_ar'=>__('text.Contactus'),'value' =>'contact'],
            ['name' =>'service', 'color'=>'success', 'name_ar'=>__('text.Services'),'value' =>'service'],
            ['name' =>'industry', 'color'=>'danger', 'name_ar'=> __('text.Industries'),'value' =>'industry'],
            ['name' =>'solution', 'color'=>'warning', 'name_ar'=> __('text.Solutions'),'value' =>'solution'],
            ['name' =>'career', 'color'=>'info', 'name_ar'=> __('text.Careers'),'value' =>'career'],
        ];
    }
}

if (!function_exists('orderTypeColor')) {
    function orderTypeColor($name)
    {
        switch ($name){
            case 'contact' :
                $color = 'primary';
                break;
            case 'service' :
                $color = 'success';
                break;
            case 'industry' :
                $color = 'danger';
                break;
            case 'solution' :
                $color = 'warning';
                break;
            case 'career' :
                $color = 'info';
                break;
            default:
                $color = 'primary';
        }
        return $color;
    }
}

if (!function_exists('switcher')) {
    function switcher()
    {
        if(session()->get('locale') == 'ar')
        {
            return 'en';
        }
        else
        {
            return 'ar';
        }
    }
}

if (!function_exists('currentLanguage')) {
    function currentLanguage()
    {
        return session()->get('locale');
    }
}

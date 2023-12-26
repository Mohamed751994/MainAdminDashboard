@include('admin_dashboard.main.edit',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'features',
    'inputs' =>[
         ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language'), 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language'), 'value' =>$content->title_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => __('text.Short_Description') .__('text.English_Language'), 'value' =>$content->short_description_en],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' =>  __('text.Short_Description') .__('text.Arabic_Language'), 'value' =>$content->short_description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => __('text.Icon'), 'value' =>$content->icon],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

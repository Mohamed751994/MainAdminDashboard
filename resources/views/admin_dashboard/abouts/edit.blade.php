@include('admin_dashboard.main.edit',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'abouts',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language'), 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language'), 'value' =>$content->title_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language'), 'value' =>$content->description_en],
        ['type' => 'text', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language'), 'value' =>$content->description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => __('text.Icon'), 'value' =>$content->icon],

    ],
    'status_order' =>true,
    'home_display' =>true,
])

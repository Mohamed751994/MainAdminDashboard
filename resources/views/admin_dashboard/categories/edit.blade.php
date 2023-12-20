@include('admin_dashboard.main.edit',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'categories',
    'inputs' =>[
       ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language'), 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language'), 'value' =>$content->title_ar],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

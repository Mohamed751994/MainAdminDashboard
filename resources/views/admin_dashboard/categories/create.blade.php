@include('admin_dashboard.main.create',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'categories',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language')],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

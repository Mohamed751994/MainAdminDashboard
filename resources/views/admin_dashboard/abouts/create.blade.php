@include('admin_dashboard.main.create',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'abouts',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language')],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => __('text.Icon')],

    ],
    'status_order' =>true,
    'home_display' =>true,
])

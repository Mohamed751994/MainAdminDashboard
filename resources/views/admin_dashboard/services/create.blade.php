@include('admin_dashboard.main.create',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'services',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL'],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => __('text.Short_Description') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' =>  __('text.Short_Description') .__('text.Arabic_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language')],
        ['type' => 'file', 'required' =>true, 'name'=>'image', 'label' => __('text.Image')],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => __('text.Icon')],
        ['type' => 'file', 'required' =>false, 'name'=>'brochure', 'label' => __('text.Brochure')],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

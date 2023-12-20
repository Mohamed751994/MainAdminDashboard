@include('admin_dashboard.main.create',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'blogs',
    'inputs' =>[
        ['type' => 'select', 'required' =>false, 'name'=>'category_id', 'label' =>__('text.Category'),'compact'=>$compact['category_id']],
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL'],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => __('text.Short_Description') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' =>  __('text.Short_Description') .__('text.Arabic_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language')],
        ['type' => 'file', 'required' =>true, 'name'=>'image', 'label' => __('text.Image')],
        ['type' => 'text', 'required' =>false, 'name'=>'tags', 'label' => __('text.Tags')],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

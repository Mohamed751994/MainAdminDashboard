@include('admin_dashboard.main.create',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'teams',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'name_en', 'label' => __('text.Name') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'name_ar', 'label' =>__('text.Name') .__('text.Arabic_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_en', 'label' => __('text.JobTitle') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_ar', 'label' => __('text.JobTitle') .__('text.Arabic_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language')],
        ['type' => 'file', 'required' =>true, 'name'=>'image', 'label' => __('text.Image')],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

@include('admin_dashboard.main.create',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'careers',
    'inputs' =>[
         ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language')],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'requirements_en', 'label' => __('text.Requirements') .__('text.English_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'requirements_ar', 'label' => __('text.Requirements') .__('text.Arabic_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language')],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language')],
        ['type' => 'select', 'required' =>false, 'name'=>'job_time', 'label' =>__('text.JobTime'),'compact'=>$compact['job_time']],
        ['type' => 'select', 'required' =>false, 'name'=>'job_type', 'label' =>__('text.JobType'),'compact'=>$compact['job_type']],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

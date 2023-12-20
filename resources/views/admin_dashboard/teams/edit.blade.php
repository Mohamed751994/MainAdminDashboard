@include('admin_dashboard.main.edit',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'teams',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'name_en', 'label' => __('text.Name') .__('text.English_Language'), 'value' =>$content->name_en],
        ['type' => 'text', 'required' =>true, 'name'=>'name_ar', 'label' =>__('text.Name') .__('text.Arabic_Language'), 'value' =>$content->name_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_en', 'label' => __('text.JobTitle') .__('text.English_Language'), 'value' =>$content->job_title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_ar', 'label' => __('text.JobTitle') .__('text.Arabic_Language'), 'value' =>$content->job_title_ar],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language'), 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language'), 'value' =>$content->description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'image', 'label' =>  __('text.Image'), 'value' =>$content->image],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

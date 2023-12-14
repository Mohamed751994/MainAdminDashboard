@include('admin_dashboard.main.edit',
[
    'title' => 'الوظائف ',
    'routeName'=>'careers',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية', 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية', 'value' =>$content->title_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL', 'value' =>$content->slug],
        ['type' => 'textarea', 'required' =>true, 'name'=>'requirements_en', 'label' => 'متطلبات الوظيفة باللغة الإنجليزية', 'value' =>$content->requirements_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'requirements_ar', 'label' => 'متطلبات الوظيفة باللغة العربية', 'value' =>$content->requirements_ar],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية', 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية', 'value' =>$content->description_ar],
        ['type' => 'select', 'required' =>false, 'name'=>'job_time', 'label' =>'نوع وقت العمل','compact'=>$compact['job_time'], 'value' =>$content->job_time],
        ['type' => 'select', 'required' =>false, 'name'=>'job_type', 'label' =>'نوع الوظيفة','compact'=>$compact['job_type'], 'value' =>$content->job_type],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

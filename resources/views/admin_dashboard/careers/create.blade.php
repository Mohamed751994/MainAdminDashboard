@include('admin_dashboard.main.create',
[
    'title' => 'الوظائف ',
    'routeName'=>'careers',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية'],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'requirements_en', 'label' => 'متطلبات الوظيفة باللغة الإنجليزية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'requirements_ar', 'label' => 'متطلبات الوظيفة باللغة العربية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية'],
        ['type' => 'select', 'required' =>false, 'name'=>'job_time', 'label' =>'نوع وقت العمل','compact'=>$compact['job_time']],
        ['type' => 'select', 'required' =>false, 'name'=>'job_type', 'label' =>'نوع الوظيفة','compact'=>$compact['job_type']],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

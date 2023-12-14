@include('admin_dashboard.main.create',
[
    'title' => 'فريق العمل',
    'routeName'=>'teams',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'name_en', 'label' =>'الأسم باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'name_ar', 'label' =>'الأسم باللغة العربية'],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_en', 'label' => 'المسمي الوظيفي باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_ar', 'label' => 'المسمي الوظيفي باللغة العربية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية'],
        ['type' => 'file', 'required' =>true, 'name'=>'image', 'label' => 'الصورة'],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

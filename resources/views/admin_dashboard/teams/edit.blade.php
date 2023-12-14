@include('admin_dashboard.main.edit',
[
    'title' => 'فريق العمل',
    'routeName'=>'teams',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'name_en', 'label' =>'الأسم باللغة الإنجليزية', 'value' =>$content->name_en],
        ['type' => 'text', 'required' =>true, 'name'=>'name_ar', 'label' =>'الأسم باللغة العربية', 'value' =>$content->name_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_en', 'label' => 'المسمي الوظيفي باللغة الإنجليزية', 'value' =>$content->job_title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'job_title_ar', 'label' => 'المسمي الوظيفي باللغة العربية', 'value' =>$content->job_title_ar],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية', 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية', 'value' =>$content->description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'image', 'label' => 'الصورة', 'value' =>$content->image],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

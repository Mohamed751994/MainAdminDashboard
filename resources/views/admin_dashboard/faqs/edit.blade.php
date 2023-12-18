@include('admin_dashboard.main.edit',
[
    'title' => 'الأسئلة الشائعة',
    'routeName'=>'faqs',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية', 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية', 'value' =>$content->title_ar],
           ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية', 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية', 'value' =>$content->description_ar],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

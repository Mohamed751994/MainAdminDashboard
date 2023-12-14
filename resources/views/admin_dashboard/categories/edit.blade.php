@include('admin_dashboard.main.edit',
[
    'title' => ' أقسام المقالات ',
    'routeName'=>'categories',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية', 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية', 'value' =>$content->title_ar],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

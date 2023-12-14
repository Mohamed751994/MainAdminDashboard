@include('admin_dashboard.main.create',
[
    'title' => ' أقسام المقالات ',
    'routeName'=>'categories',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية'],
    ],
    'status_order' =>true,
    'home_display' =>false,
])

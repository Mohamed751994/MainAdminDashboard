@include('admin_dashboard.main.index',
[
    'title' => 'الأسئلة الشائعة',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'faqs',
    'model'=>Faq::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

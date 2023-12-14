@include('admin_dashboard.main.index',
[
    'title' => 'الخدمات',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'services',
    'model'=>Service::class,
    'thNames' =>[
        '#' => 'id',
        'الصورة' => 'image',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

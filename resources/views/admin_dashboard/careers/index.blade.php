@include('admin_dashboard.main.index',
[
    'title' => 'الوظائف',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'careers',
    'model'=>Career::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

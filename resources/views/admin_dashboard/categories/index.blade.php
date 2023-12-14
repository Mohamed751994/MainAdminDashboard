@include('admin_dashboard.main.index',
[
    'title' => ' أقسام المقالات ',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'categories',
    'model'=>Category::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

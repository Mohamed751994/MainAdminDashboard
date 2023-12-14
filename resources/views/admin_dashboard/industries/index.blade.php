@include('admin_dashboard.main.index',
[
    'title' => 'الصناعات',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'industries',
    'model'=>Industry::class,
    'thNames' =>[
        '#' => 'id',
        'الصورة' => 'image',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

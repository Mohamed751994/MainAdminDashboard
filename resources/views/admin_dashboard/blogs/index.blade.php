@include('admin_dashboard.main.index',
[
    'title' => 'المقالات',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'blogs',
    'model'=>Blog::class,
    'thNames' =>[
        '#' => 'id',
        'الصورة' => 'image',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

@include('admin_dashboard.main.index',
[
    'title' => 'الحلول',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'solutions',
    'model'=>Solution::class,
    'thNames' =>[
        '#' => 'id',
        'الصورة' => 'image',
        'الأسم' => 'title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

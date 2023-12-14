@include('admin_dashboard.main.index',
[
    'title' => 'فريق العمل',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'teams',
    'model'=>Team::class,
    'thNames' =>[
        '#' => 'id',
        'الصورة' => 'image',
        'الأسم' => 'name_ar',
        'المسمي الوظيفي' => 'job_title_ar',
        'الحالة' => 'status',
        'الترتيب' => 'sort'
    ]
])

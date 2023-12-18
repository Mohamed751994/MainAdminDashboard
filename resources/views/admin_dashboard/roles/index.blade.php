@include('admin_dashboard.main.index',
[
    'title' => 'الأدوار والصلاحيات',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'roles',
    'model'=>Role::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'name'
    ]
])

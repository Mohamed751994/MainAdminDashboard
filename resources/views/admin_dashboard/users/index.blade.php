
@include('admin_dashboard.main.index',
[
    'title' => 'مستخدمين الداشبورد',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'users',
    'model'=>User::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'name',
        'البريد الإلكتروني' => 'email',
    ]
])

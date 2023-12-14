
@include('admin_dashboard.main.index',
[
    'title' => 'مستخدمين الداشبورد',
    'create' => (auth()->user()->type === "admin") ? true : false,
    'edit' => (auth()->user()->type === "admin") ? true : false,
    'show' => false,
    'delete' => (auth()->user()->type === "admin") ? true : false,
    'routeName'=>'users',
    'model'=>User::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'name',
        'البريد الإلكتروني' => 'email',
    ]
])

@include('admin_dashboard.main.index',
[
    'title' => ' الإعدادات ',
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => false,
    'routeName'=>'settings',
    'model'=>Setting::class,
    'thNames' =>[
        '#' => 'id',
        'الأسم' => 'label',
        'المفتاح' => 'key'
    ]
])

@include('admin_dashboard.main.index',
[
    'title' => 'الطلبات',
    'create' => false,
    'edit' => false,
    'show' => true,
    'delete' => true,
    'routeName'=>'orders',
    'model'=>Order::class,
    'filter' => [
        ['col' =>'type' ,'col_ar' =>'نوع الطلب' , 'input_type' =>'select', 'data' => orderTypes()],
        ['col' =>'seen','col_ar' =>'قراءة الرسائل'  , 'input_type' =>'select', 'data' => [
            ['name' =>'Unseen' ,'name_ar' =>'غير مقروءة','value' =>'0'],
            ['name' =>'Seen','name_ar' =>'مقروءة','value' =>'1'],
        ]],
    ],
    'thNames' =>[
        '#' => 'id',
        'نوع الطلب' => 'type',
        'الأسم' => 'name',
        'الإيميل' => 'email',
        'الهاتف' => 'phone',
        'قراءة الرسالة' => 'seen',
    ]
])

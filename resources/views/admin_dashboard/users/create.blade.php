@include('admin_dashboard.main.create',
[
    'title' => 'مستخدمين الداشبورد',
    'routeName'=>'users',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'name', 'label' =>'الأسم  '],
        ['type' => 'text', 'required' =>true, 'name'=>'email', 'label' =>'البريد الإلكتروني'],
        ['type' => 'text', 'required' =>true, 'name'=>'password', 'label' => 'كلمة المرور'],
    ],
    'status_order' =>false,
    'home_display' =>false,
])

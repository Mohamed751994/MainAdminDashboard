@include('admin_dashboard.main.edit',
[
    'title' => 'مستخدمين الداشبورد',
    'routeName'=>'users',
    'inputs' =>[
         ['type' => 'text', 'required' =>true, 'name'=>'name', 'label' =>'الأسم  ', 'value' =>$content->name],
        ['type' => 'text', 'required' =>true, 'name'=>'email', 'label' =>'البريد الإلكتروني', 'value' =>$content->email],
    ],
    'status_order' =>false,
    'home_display' =>false,
])

@include('admin_dashboard.main.show',
[
    'title' => 'الطلبات',
    'routeName'=>'orders',
    'model'=>Order::class,
    'data' => [
        ['value' => $content->seen, 'type'=>'text', 'index' =>1, 'name_ar' => 'قراءة الرسالة'],
        ['value' => $content->created_at, 'type'=>'text', 'index' =>1, 'name_ar' => 'تاريخ الطلب'],
        ['value' => $content->type, 'type'=>'text', 'index' =>1, 'name_ar' => 'نوع الطلب '],
        ['value' => $content->relation?->title_ar, 'type'=>'text', 'index' =>1, 'name_ar' => 'الطلب علي'],
        ['value' => $content->name, 'type'=>'text', 'index' =>1, 'name_ar' => 'الأسم'],
        ['value' => $content->email, 'type'=>'text', 'index' =>1, 'name_ar' => 'الأيميل'],
        ['value' => $content->phone, 'type'=>'text', 'index' =>1, 'name_ar' => 'الهاتف'],
        ['value' => $content->message, 'type'=>'text', 'index' =>1, 'name_ar' => 'الرسالة'],
        ['value' => $content->cv, 'type'=>'file', 'index' =>1, 'name_ar' => 'السيرة الذاتية'],
    ]
])

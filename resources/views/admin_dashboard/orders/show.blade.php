@include('admin_dashboard.main.show',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'orders',
    'model'=>Order::class,
    'data' => [
        ['value' => $content->seen, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.MsgSeen') ],
        ['value' => $content->created_at, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.OrderDate')],
        ['value' => $content->type, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.FormType')],
        ['value' => $content->relation?->title_ar, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.OrderOn')],
        ['value' => $content->name, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.Name')],
        ['value' => $content->email, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.Email')],
        ['value' => $content->phone, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.Phone')],
        ['value' => $content->message, 'type'=>'text', 'index' =>1, 'name_ar' => __('text.Message')],
        ['value' => $content->cv, 'type'=>'file', 'index' =>1, 'name_ar' => __('text.CV')],
    ]
])

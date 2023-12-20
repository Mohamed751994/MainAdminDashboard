@include('admin_dashboard.main.index',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'create' => false,
    'edit' => false,
    'show' => true,
    'delete' => true,
    'routeName'=>'orders',
    'model'=>Order::class,
    'filter' => [
        ['col' =>'type' ,'col_ar' =>__('text.FormType') , 'input_type' =>'select', 'data' => orderTypes()],
        ['col' =>'seen','col_ar' =>__('text.MsgSeen')  , 'input_type' =>'select', 'data' => [
            ['name' =>'Unseen' ,'name_ar' =>__('text.Unseen'),'value' =>'0'],
            ['name' =>'Seen','name_ar' =>__('text.Seen'),'value' =>'1'],
        ]],
    ],
    'thNames' =>[
        '#' => 'id',
        __('text.FormType') => 'type',
        __('text.Name') => 'name',
        __('text.Email') => 'email',
        __('text.Phone') => 'phone',
        __('text.MsgSeen') => 'seen',
    ]
])

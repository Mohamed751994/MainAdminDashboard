@include('admin_dashboard.main.index',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => false,
    'routeName'=>'settings',
    'model'=>Setting::class,
    'thNames' =>[
        '#' => 'id',
       __('text.Name') => 'label',
        __('text.Key') => 'key'
    ]
])

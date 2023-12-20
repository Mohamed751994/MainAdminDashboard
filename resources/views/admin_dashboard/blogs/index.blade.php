@include('admin_dashboard.main.index',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'blogs',
    'model'=>Blog::class,
    'thNames' =>[
        '#' => 'id',
           __('text.Image') => 'image',
         __('text.Name') => 'title_'.currentLanguage(),
       __('text.Status') => 'status',
         __('text.Sort') => 'sort'
    ]
])

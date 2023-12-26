@include('admin_dashboard.main.index',
[
    'title' => __('text.'.\Request::segment(2).'-index'),
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'features',
    'model'=>Feature::class,
    'thNames' =>[
        '#' => 'id',
         __('text.Icon') => 'icon',
         __('text.Name') => 'title_'.currentLanguage(),
         __('text.Status') => 'status',
         __('text.Sort') => 'sort'
    ]
])

@include('admin_dashboard.main.index',
[
    'title' => __('text.'.\Request::segment(2).'-index'),
    'create' => true,
    'edit' => true,
    'show' => false,
    'delete' => true,
    'routeName'=>'teams',
    'model'=>Team::class,
    'thNames' =>[
        '#' => 'id',
         __('text.Image') => 'image',
         __('text.Name') => 'name_'.currentLanguage(),
         __('text.JobTitle') => 'job_title_'.currentLanguage(),
         __('text.Status') => 'status',
         __('text.Sort') => 'sort'
    ]
])

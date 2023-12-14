@include('admin_dashboard.main.create',
[
    'title' => 'المقالات',
    'routeName'=>'blogs',
    'inputs' =>[
        ['type' => 'select', 'required' =>false, 'name'=>'category_id', 'label' =>'القسم','compact'=>$compact['category_id']],
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية'],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL'],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => 'الوصف المختصر باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' => 'الوصف المختصر باللغة العربية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية'],
        ['type' => 'file', 'required' =>true, 'name'=>'image', 'label' => 'الصورة'],
        ['type' => 'text', 'required' =>false, 'name'=>'tags', 'label' => 'التاجات'],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

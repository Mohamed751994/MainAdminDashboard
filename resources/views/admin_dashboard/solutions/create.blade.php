@include('admin_dashboard.main.create',
[
    'title' => 'الحلول ',
    'routeName'=>'solutions',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية'],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL'],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => 'الوصف المختصر باللغة الإنجليزية'],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' => 'الوصف المختصر باللغة العربية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية'],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية'],
        ['type' => 'file', 'required' =>true, 'name'=>'image', 'label' => 'الصورة'],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => 'صورة الأيكون'],
        ['type' => 'file', 'required' =>false, 'name'=>'brochure', 'label' => 'الملف التعريفي '],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

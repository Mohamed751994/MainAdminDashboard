@include('admin_dashboard.main.edit',
[
    'title' => 'المقالات',
    'routeName'=>'blogs',
    'inputs' =>[
        ['type' => 'select', 'required' =>false, 'name'=>'category_id', 'label' =>'القسم','value' =>$content->category_id,'compact'=>$compact['category_id']],
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية', 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية', 'value' =>$content->title_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL', 'value' =>$content->slug],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => 'الوصف المختصر باللغة الإنجليزية', 'value' =>$content->short_description_en],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' => 'الوصف المختصر باللغة العربية', 'value' =>$content->short_description_ar],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية', 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية', 'value' =>$content->description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'image', 'label' => 'الصورة', 'value' =>$content->image],
        ['type' => 'text', 'required' =>false, 'name'=>'tags', 'label' => 'التاجات', 'value' =>$content->tags],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

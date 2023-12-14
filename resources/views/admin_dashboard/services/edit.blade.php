@include('admin_dashboard.main.edit',
[
    'title' => 'الخدمات ',
    'routeName'=>'services',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' =>'الأسم باللغة الإنجليزية', 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>'الأسم باللغة العربية', 'value' =>$content->title_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL', 'value' =>$content->slug],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => 'الوصف المختصر باللغة الإنجليزية', 'value' =>$content->short_description_en],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' => 'الوصف المختصر باللغة العربية', 'value' =>$content->short_description_ar],
           ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' => 'الوصف باللغة الإنجليزية', 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' => 'الوصف باللغة العربية', 'value' =>$content->description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'image', 'label' => 'الصورة', 'value' =>$content->image],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => 'صورة الأيكون', 'value' =>$content->icon],
        ['type' => 'file', 'required' =>false, 'name'=>'brochure', 'label' => 'الملف التعريفي (PDF - DOC - DOCX)', 'value' =>$content->brochure],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

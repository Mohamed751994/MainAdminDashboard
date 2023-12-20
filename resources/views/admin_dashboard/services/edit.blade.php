@include('admin_dashboard.main.edit',
[
     'title' => __('text.'.\Request::segment(2).'-index'),
    'routeName'=>'services',
    'inputs' =>[
        ['type' => 'text', 'required' =>true, 'name'=>'title_en', 'label' => __('text.Name') .__('text.English_Language'), 'value' =>$content->title_en],
        ['type' => 'text', 'required' =>true, 'name'=>'title_ar', 'label' =>__('text.Name') .__('text.Arabic_Language'), 'value' =>$content->title_ar],
        ['type' => 'text', 'required' =>true, 'name'=>'slug', 'label' =>'Slug URL', 'value' =>$content->slug],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_en', 'label' => __('text.Short_Description') .__('text.English_Language'), 'value' =>$content->short_description_en],
        ['type' => 'text', 'required' =>true, 'name'=>'short_description_ar', 'label' =>  __('text.Short_Description') .__('text.Arabic_Language'), 'value' =>$content->short_description_ar],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_en', 'label' =>  __('text.Description') .__('text.English_Language'), 'value' =>$content->description_en],
        ['type' => 'textarea', 'required' =>true, 'name'=>'description_ar', 'label' =>  __('text.Description') .__('text.Arabic_Language'), 'value' =>$content->description_ar],
        ['type' => 'file', 'required' =>false, 'name'=>'image', 'label' => __('text.Image'), 'value' =>$content->image],
        ['type' => 'file', 'required' =>false, 'name'=>'icon', 'label' => __('text.Icon'), 'value' =>$content->icon],
        ['type' => 'file', 'required' =>false, 'name'=>'brochure', 'label' => __('text.Brochure').' (PDF - DOC - DOCX)', 'value' =>$content->brochure],
    ],
    'status_order' =>true,
    'home_display' =>true,
])

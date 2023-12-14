@extends('admin_dashboard.layout.master')
@section('Page_Title')   الإعدادات | تعديل   @endsection


@section('content')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="breadcrumb d-flex align-items-center justify-content-between">
                <div class="">
                    <a class="text-dark" href="{{route('settings.index')}}">الإعدادات</a>
                    <span class="mx-2">-</span>
                    <strong class="text-primary">تعديل</strong>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <div class="row g-3 mt-4">
                        <div class="col-12">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <form class="row g-3" id="validateForm" method="post" enctype="multipart/form-data"
                                          action="{{route('settings.update', $content->id)}}">
                                        @method('put')
                                        @csrf

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">الأسم   <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="label" value="{{$content->label}}" required placeholder="اسم الموقع" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Key   <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" disabled  value="{{$content->key}}" required placeholder="site_name" />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">النوع</label>
                                            <select class="form-control" disabled onchange="changeInputType(this)">
                                                <option value="text" @selected($content->input_type == 'text')>Text</option>
                                                <option value="textarea" @selected($content->input_type == 'textarea')>Textarea</option>
                                                <option value="file" @selected($content->input_type == 'file')>File</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mb-3 @if($content->input_type != 'text') d-none @endif" id="valueInputText">
                                            <label class="form-label">القيمة <span class="text-danger">*</span></label>
                                            <input type="text" @if($content->input_type == 'text') name="value"  required @endif class="form-control" value="{{$content->value}}" />
                                        </div>
                                        <div class="col-md-12 mb-3 @if($content->input_type != 'file') d-none @endif" id="valueInputFile">
                                            <label class="form-label">القيمة <span class="text-danger">*</span></label>
                                            <input type="file"  @if($content->input_type == 'file') name="value" required @endif  class="form-control" />
                                            @if($content->input_type == 'file')
                                                <div class="mt-2">
                                                    <a class="btn btn-secondary btn-sm" download href="{{asset('uploads/'.$content->value)}}">تحميل</a>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="col-md-12 mb-3  @if($content->input_type != 'textarea') d-none @endif" id="valueInputTextarea">
                                            <label class="form-label">القيمة <span class="text-danger">*</span></label>
                                            <textarea class="form-control ckeditor"   @if($content->input_type == 'textarea') name="value" required @endif >{!! $content->value !!}</textarea>
                                        </div>

                                        @include('admin_dashboard.inputs.edit_btn')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
    <script>
        $(".ckeditor").each(function () {
            let id = $(this).attr('id');
            CKEDITOR.replace(id);
        });

        $(document).ready(function () {
            $("#validateForm").validate({
                rules: {

                    'label': {
                        required: true,
                    },
                    'key': {
                        required: true,
                    },
                    'value': {
                        required: true,
                    },


                },
                messages: {

                    'label': {
                        required: "الحقل مطلوب",
                    },
                    'key': {
                        required: "الحقل مطلوب",
                    },
                    'value': {
                        required: "الحقل مطلوب",
                    },

                }
            });
        });

        function changeInputType(elem)
        {
            var val = $(elem).val();
            if(val === 'textarea')
            {
                $('#valueInputText').addClass('d-none');
                $('#valueInputFile').addClass('d-none');
                $('#valueInputTextarea').removeClass('d-none');
                $('#valueInputText input').attr('name', 'not_value');
                $('#valueInputFile input').attr('name', 'not_value');
                $('#valueInputTextarea textarea').attr('name', 'value');
            }
            else if(val === 'file')
            {
                $('#valueInputText').addClass('d-none');
                $('#valueInputFile').removeClass('d-none');
                $('#valueInputTextarea').addClass('d-none');
                $('#valueInputText input').attr('name', 'not_value');
                $('#valueInputTextarea textarea').attr('name', 'not_value');
                $('#valueInputFile input').attr('name', 'value');
            }
            else
            {
                $('#valueInputText').removeClass('d-none');
                $('#valueInputFile').addClass('d-none');
                $('#valueInputTextarea').addClass('d-none');
                $('#valueInputText input').attr('name', 'value');
                $('#valueInputTextarea textarea').attr('name', 'not_value');
                $('#valueInputFile input').attr('name', 'not_value');
            }
        }
    </script>


@endpush


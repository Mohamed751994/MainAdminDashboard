@extends('admin_dashboard.layout.master')
@section('Page_Title')  @lang('text.'.\Request::segment(2).'-index') | @lang('text.Create')   @endsection


@section('content')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="breadcrumb d-flex align-items-center justify-content-between">
                <div class="">
                    <a class="text-dark" href="{{route('settings.index')}}"> @lang('text.'.\Request::segment(2).'-index')</a>
                    <span class="mx-2">-</span>
                    <strong class="text-primary">@lang('text.Create')</strong>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <div class="row g-3 mt-4">
                        <div class="col-12">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <form class="row g-3" id="validateForm" method="post" enctype="multipart/form-data"
                                          action="{{route('settings.store')}}">
                                        @csrf

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">@lang('text.Name') <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="label" name="label"  required placeholder="@lang('text.Name')" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">@lang('text.Key') <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="key"  required placeholder="@lang('text.Key')" />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">@lang('text.Type')</label>
                                            <select class="form-select form-control" name="input_type" onchange="changeInputType(this)">
                                                <option value="text">Text</option>
                                                <option value="textarea">Textarea</option>
                                                <option value="file">File</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3" id="valueInputText">
                                            <label class="form-label">@lang('text.Value') <span class="text-danger">*</span></label>
                                            <input type="text" name="value"  class="form-control" />
                                        </div>
                                        <div class="col-md-12 mb-3 d-none" id="valueInputFile">
                                            <label class="form-label">@lang('text.Value') <span class="text-danger">*</span></label>
                                            <input type="file" name="not_value"  class="form-control" />
                                        </div>
                                        <div class="col-md-12 mb-3 d-none" id="valueInputTextarea">
                                            <label class="form-label">@lang('text.Value') <span class="text-danger">*</span></label>
                                            <textarea class="form-control ckeditor" name="not_value"  ></textarea>
                                        </div>
                                        @include('admin_dashboard.inputs.add_btn')
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
                    label: {
                        required: true,
                    },
                    key: {
                        required: true,
                    },
                    value: {
                        required: true,
                    },


                },
                messages: {

                    'label': {
                        required: "@lang('text.required')",
                    },
                    'key': {
                        required: "@lang('text.required')",
                    },
                    'value': {
                        required: "@lang('text.required')",
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


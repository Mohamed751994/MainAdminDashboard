@extends('admin_dashboard.layout.master')
@section('Page_Title')   الأدوار والصلاحيات | تعديل   @endsection


@section('content')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="breadcrumb d-flex align-items-center justify-content-between">
                <div class="">
                    <a class="text-dark" href="{{route('roles.index')}}">الأدوار والصلاحيات</a>
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
                                          action="{{route('roles.update', $content->id)}}">
                                        @method('put')
                                        @csrf

                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label for="name"> الأسم <span class="text-danger">*</span> </label>
                                                <input type="text" value="{{$content->name}}" name="name" id="name" class="form-control mt-2" required  placeholder="ادخل الأسم">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label class="mb-3" for="email"> الصلاحيات <span class="text-danger">*</span> </label>
                                                <div class="row align-items-center justify-content-between">
                                                    @foreach($permission as $value)
                                                        <div class="col-md-2 d-flex align-items-center m-2 singlePermission">
                                                            <input  id="id_{{$value->id}}" @if(in_array($value->id, $rolePermissions)) checked @endif type="checkbox"  name="permission[]" value="{{$value->id}}">
                                                            <label class="mx-3" for="id_{{$value->id}}">@lang('text.'.$value->name)</label>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
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
    <script>

        $(document).ready(function () {
            $("#validateForm").validate({
                rules: {

                    'name': {
                        required: true,
                    },


                },
                messages: {

                    'name': {
                        required: 'الحقل مطلوب',
                    },

                }
            });
        });
    </script>



@endpush

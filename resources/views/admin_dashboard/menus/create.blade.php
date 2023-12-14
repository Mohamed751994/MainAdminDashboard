@extends('admin_dashboard.layout.master')
@section('Page_Title')   القائمة | إضافة   @endsection


@section('content')

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">

                    <div class="row g-3 mt-4">
                        <div class="col-12">
                            <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <form class="row g-3" id="validateForm" method="post" enctype="multipart/form-data"
                                          action="{{route('admin.storeMenu')}}">
                                        @csrf
                                        <div class="col-md-6">
                                            <label class="form-label">  الأسم  <span class="text-danger">*</span> </label>
                                            <input type="text" name="name" class="form-control" required placeholder="ادخل الأسم ">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">  اسم الموديل  <span class="text-danger">*</span> </label>
                                            <input type="text" name="model_name" class="form-control" required placeholder="ادخل الأسم ">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">  الأيكون  <span class="text-danger">*</span> </label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" name="icon" id="inputIcon" class="form-control" required placeholder="ادخل الأيكون">
                                                <button type="button" class="btn btn-secondary w-100"  data-bs-toggle="modal" data-bs-target="#icons">اختار الأيكون</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">  اسم الroute  <span class="text-danger">*</span> </label>
                                            <input type="text" name="route_name" class="form-control" required placeholder="ادخل اسم الroute">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">  الترتيب <span class="text-danger">*</span> </label>
                                            <input type="number" min="0" value="1" name="sort" class="form-control" required placeholder="ادخل  الترتيب">
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


@include('admin_dashboard.menus.icons')

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {
            $("#validateForm").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    model_name: {
                        required: true,
                    },
                    icon: {
                        required: true,
                    },
                    route_name: {
                        required: true,
                    },
                    sort: {
                        required: true,
                    },


                },
                messages: {
                    name: {
                        required: "الحقل مطلوب",
                    },
                    model_name: {
                        required: "الحقل مطلوب",
                    },
                    icon: {
                        required: "الحقل مطلوب",
                    },
                    route_name: {
                        required: "الحقل مطلوب",

                    },
                    sort: {
                        required: "الحقل مطلوب",

                    },


                }
            });
        });

        $(document).on('click', '#getIconClass .col', function(){
           let classIcon = $(this).find('i').attr('class');
           $('#inputIcon').val(classIcon);
           $('#icons').modal('hide');
        });

    </script>
@endpush

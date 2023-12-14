@extends('admin_dashboard.layout.master')
@section('Page_Title')  {{$title}} @endsection

@include('admin_dashboard.main.styles.indexStyles')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0"> <i class="bi bi-grid-fill"></i>   {{$title}} <small> ({{$content->total()}})</small> </h5>
                @if($create)
                <div class="ms-auto position-relative">
                    <a href="{{route($routeName.'.create')}}" class="btnIcon btn btn-outline-primary px-5"><i class="lni lni-circle-plus"></i> إنشاء جديد </a>
                </div>
                @endif
            </div>
            @if(isset($filter))
                <div class="filterData">
                    <form class="d-flex align-items-center mt-4 mb-3" action="{{\Request::url()}}" method="GET">
                        @foreach($filter as $f)
                            @if($f['input_type'] == 'select')
                            <select class="form-control form-select mx-1" name="{{$f['col']}}">
                                <option value="">فلتر ب{{$f['col_ar']}} ....</option>
                                @foreach($f['data'] as $d)
                                    <option @selected($d['value'] == request($f['col'])) value="{{$d['value']}}">{{$d['name_ar']}}</option>
                                @endforeach
                            </select>
                            @endif
                        @endforeach
                        <button type="submit" class="btn w-100 btn-success">بحث الآن</button>
                    </form>
                </div>
            @endif

            <!--Table Buttons-->
            <div class="row mt-4">
                @if($delete)
                <div class="col-md-6">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="btn btn-sm btn-danger" id="deleteSelected"><i class="mx-1  lni lni-close"></i> حذف المحدد</button>
                    </div>
                </div>
                @endif
            </div>

            <!--Table Index-->
            <div class="table-responsive mt-2">
                <table class="table align-middle table-hover">
                    <thead class="table-secondary">
                    <tr>
                        @if($delete)
                        <th>
                            <input type="checkbox" class="form-check-input" id="checkAll">
                        </th>
                        @endif
                    @foreach($thNames as $key =>$col)
                        <th>{{$key}}</th>
                        @endforeach
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($content as $con)
                        <tr>
                            @if($delete)
                            <td>
                                <input type="checkbox" class="form-check-input checkAll" name="checkboxes[]" value="{{$con->id}}">
                            </td>
                            @endif
                            @foreach($thNames as $key =>$col)
                            <td>
                                @if($col == 'image')
                                    <img src="{{ $con->$col }}" class="rounded-circle imageList" alt="">
                                @elseif($col == 'status')
                                    <div class="form-check form-switch">
                                        <input class="form-check-input customSliderCheckbox" type="checkbox"
                                               name="status" onchange="quickChange(this, '{{$model}}', '{{$con->id}}', 'status')" id="flexSwitchCheckChecked" @if($con->$col) value="0" checked="" @else value="1" @endif>
                                    </div>
                                @else
                                {!! $con->$col !!}
                                @endif
                            </td>
                            @endforeach
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    @if($show)
                                    <a href="{{route($routeName.'.show', $con->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                       title="عرض"><i class="lni lni-eye"></i></a>
                                    @endif
                                    @if($edit)
                                    <a href="{{route($routeName.'.edit', $con->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                       title="تعديل"><i class="bi bi-pencil-fill"></i></a>
                                    @endif
                                    @if($delete)
                                    <a href="javascript:;"  data-bs-toggle="modal" data-bs-target="#deleteItem{{$con->id}}" class="text-danger" data-bs-toggle="tooltip"
                                       data-bs-placement="bottom" title="حذف"><i class="bi bi-trash-fill"></i></a>
                                    <div class="modal fade" id="deleteItem{{$con->id}}" tabindex="-1" aria-labelledby="link{{$con->id}}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="link{{$con->id}}">هل أنت متأكد من حذف هذا العنصر ؟</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-default btn-sm me-2" type="button" data-bs-dismiss="modal">لا</button>
                                                    <form action="{{route($routeName.'.destroy',$con->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" type="button">نعم</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="{{count($thNames)+2}}" class="text-center">
                                <p> لا يوجد بيانات </p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div>
                    {{$content->links()}}
                </div>
            </div>

        </div>
    </div>

@endsection

@include('admin_dashboard.main.scripts.indexScripts')

@extends('admin_dashboard.layout.master')

@section('Page_Title') لوحة التحكم  @endsection

@section('content')


    <div class="row mb-2 justify-content-between align-items-center">

        <a class="col-6 col-lg-2" href="{{route('services.index')}}">
            <div class="card radius-10 bg-tiffany">
                <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                        <i class="lni lni-users"></i>
                    </div>
                    <h3 class="text-white">{{$data['services']}}</h3>
                    <p class="mb-0 text-white"> @lang('text.Count') @lang('text.Services') </p>
                </div>
            </div>
        </a>
        <a class="col-6 col-lg-2" href="{{route('solutions.index')}}">
            <div class="card radius-10 bg-purple">
                <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="text-white">{{$data['solutions']}}</h3>
                    <p class="mb-0 text-white">@lang('text.Count') @lang('text.Solutions') </p>
                </div>
            </div>
        </a>
        <a class="col-6 col-lg-2" href="{{route('industries.index')}}">
            <div class="card radius-10 bg-info">
                <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                        <i class="lni lni-car"></i>
                    </div>
                    <h3 class="text-white">{{$data['industries']}}</h3>
                    <p class="mb-0 text-white">@lang('text.Count') @lang('text.Industries')</p>
                </div>
            </div>
        </a>

        <a class="col-6 col-lg-2" href="{{route('blogs.index')}}">
            <div class="card radius-10 bg-orange">
                <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                        <i class="lni lni-car"></i>
                    </div>
                    <h3 class="text-white">{{$data['blogs']}}</h3>
                    <p class="mb-0 text-white"> @lang('text.Count') @lang('text.Blogs')</p>
                </div>
            </div>
        </a>
        <a class="col-6 col-lg-2" href="{{route('careers.index')}}">
            <div class="card radius-10 bg-secondary">
                <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                        <i class="lni lni-car"></i>
                    </div>
                    <h3 class="text-white">{{$data['careers']}}</h3>
                    <p class="mb-0 text-white">@lang('text.Count') @lang('text.Careers')</p>
                </div>
            </div>
        </a>
        <a class="col-6 col-lg-2" href="{{route('orders.index')}}">
            <div class="card radius-10 bg-bronze">
                <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                        <i class="lni lni-users"></i>
                    </div>
                    <h3 class="text-white">{{$data['orders']}}</h3>
                    <p class="mb-0 text-white">@lang('text.Count') @lang('text.Orders') </p>
                </div>
            </div>
        </a>


        {{--ordersChart--}}
        <div class="col-md-12">
            <div class="card rounded-4 w-100">
                <div class="card-header bg-transparent border-0">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h6 class=" mb-0 mt-3">@lang('text.Orders')</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <div class="charts-payments">
                        <canvas id="ordersChart" class="w-100"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx1 = document.getElementById('ordersChart');

        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: [
                    ' @lang('text.Orders')  '+' ('+{{$data['orders']}}+')',
                    '@lang('text.Orders') @lang('text.Contactus')'+' ('+{{$data['orders_contact']}}+')',
                    '@lang('text.Orders') @lang('text.Services')'+' ('+{{$data['orders_services']}}+')',
                    '@lang('text.Orders') @lang('text.Solutions')'+' ('+{{$data['orders_solutions']}}+')',
                    '@lang('text.Orders') @lang('text.Industries') '+' ('+{{$data['orders_industries']}}+')',
                    '@lang('text.Orders') @lang('text.Careers') '+' ('+{{$data['orders_careers']}}+')'
                ],
                datasets: [{
                    label: "  @lang('text.Orders')  ",
                    data: [{{$data['orders']}},{{$data['orders_contact']}},{{$data['orders_services']}},{{$data['orders_solutions']}},{{$data['orders_industries']}},{{$data['orders_careers']}}],
                    borderWidth: 1,
                    borderColor: ['#ffffff','#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff'], // Add custom color border
                    backgroundColor: ['#05eedb','#0460e8', '#12bf24','#ffca02', '#e72e2e', '#32bfff'], // Add custom color background (Points and Fill)
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                onClick:function(e,item){
                    if(item.length <= 0) return;
                    if(item[0].index === 0)
                    {
                        location.href = "{{route('orders.index')}}";
                    }
                    else if(item[0].index === 1)
                    {
                        location.href = "{{route('orders.index')}}?type=contact";
                    }
                    else if(item[0].index === 2)
                    {
                        location.href = "{{route('orders.index')}}?type=service";
                    }
                    else if(item[0].index === 3)
                    {
                        location.href = "{{route('orders.index')}}?type=solution";
                    }
                    else if(item[0].index === 4)
                    {
                        location.href = "{{route('orders.index')}}?type=industry";
                    }
                    else if(item[0].index === 5)
                    {
                        location.href = "{{route('orders.index')}}?type=career";
                    }
                }
            }
        });
    </script>
@endpush

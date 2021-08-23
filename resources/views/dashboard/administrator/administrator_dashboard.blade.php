@extends('layouts.administrator.main')

@section('content')
<div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card card-block card-stretch card-height-half">
                    <div class="card-body res-block">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning-light icon iq-icon-box mr-2 rounded">
                                <svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.6 12.8C12.695 12.8 15.2 10.295 15.2 7.20001C15.2 4.10501 12.695 1.60001 9.6 1.60001C6.505 1.60001 4 4.10501 4 7.20001C4 10.295 6.505 12.8 9.6 12.8ZM13.44 14.4H13.025C11.985 14.9 10.83 15.2 9.6 15.2C8.37 15.2 7.22 14.9 6.175 14.4H5.76C2.58 14.4 0 16.98 0 20.16V21.6C0 22.925 1.075 24 2.4 24H16.8C18.125 24 19.2 22.925 19.2 21.6V20.16C19.2 16.98 16.62 14.4 13.44 14.4ZM24 12.8C26.65 12.8 28.8 10.65 28.8 8.00001C28.8 5.35001 26.65 3.20001 24 3.20001C21.35 3.20001 19.2 5.35001 19.2 8.00001C19.2 10.65 21.35 12.8 24 12.8ZM26.4 14.4H26.21C25.515 14.64 24.78 14.8 24 14.8C23.22 14.8 22.485 14.64 21.79 14.4H21.6C20.58 14.4 19.64 14.695 18.815 15.17C20.035 16.485 20.8 18.23 20.8 20.16V22.08C20.8 22.19 20.775 22.295 20.77 22.4H29.6C30.925 22.4 32 21.325 32 20C32 16.905 29.495 14.4 26.4 14.4Z" fill="#FE721C" />
                                </svg>
                            </div>
                            <div class="media-support-info ml-3">
                                    <h5 class="text-warning"></h5>
                                    <p class="mb-0">Client’s</p>
                            </div>
                            <div class="media-support-amount ml-3">
                                <div class="progress-round income-progress salon2-progress-warning mx-auto" data-value="46">
                                    <span class="progress-left">
                                        <span class="progress-bar border-white" style="transform: rotate(0deg);"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar border-warning" style="transform: rotate(150deg);"></span>
                                    </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                        <div class="h4 mb-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="card card-block card-stretch card-height-half">
                        <div class="card-body res-block">
                            <div class="d-flex align-items-center">
                                <div class="bg-info-light icon iq-icon-box mr-2 rounded">
                                    <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M38.1562 21.3313C38.3187 20.45 38.3187 19.55 38.1562 18.6688L39.7687 17.7375C39.9562 17.6313 40.0375 17.4125 39.975 17.2063C39.5562 15.8563 38.8375 14.6313 37.9 13.6188C37.7563 13.4625 37.525 13.425 37.3375 13.5313L35.725 14.4625C35.0437 13.8813 34.2625 13.4313 33.4188 13.1313V11.2688C33.4188 11.0563 33.2687 10.8688 33.0625 10.825C31.6688 10.5125 30.25 10.525 28.925 10.825C28.7188 10.8688 28.5688 11.0563 28.5688 11.2688V13.1313C27.725 13.4313 26.9438 13.8813 26.2625 14.4625L24.65 13.5313C24.4688 13.425 24.2312 13.4625 24.0875 13.6188C23.15 14.6313 22.4313 15.8563 22.0125 17.2063C21.95 17.4125 22.0375 17.6313 22.2188 17.7375L23.8312 18.6688C23.6687 19.55 23.6687 20.45 23.8312 21.3313L22.2188 22.2625C22.0312 22.3688 21.95 22.5875 22.0125 22.7938C22.4313 24.1438 23.15 25.3625 24.0875 26.3813C24.2312 26.5375 24.4625 26.575 24.65 26.4688L26.2625 25.5375C26.9438 26.1188 27.725 26.5688 28.5688 26.8688V28.7313C28.5688 28.9438 28.7188 29.1313 28.925 29.175C30.3187 29.4875 31.7375 29.475 33.0625 29.175C33.2687 29.1313 33.4188 28.9438 33.4188 28.7313V26.8688C34.2625 26.5688 35.0437 26.1188 35.725 25.5375L37.3375 26.4688C37.5188 26.575 37.7563 26.5375 37.9 26.3813C38.8375 25.3688 39.5562 24.1438 39.975 22.7938C40.0375 22.5875 39.95 22.3688 39.7687 22.2625L38.1562 21.3313ZM31 23.0313C29.325 23.0313 27.9688 21.6688 27.9688 20C27.9688 18.3313 29.3312 16.9688 31 16.9688C32.6688 16.9688 34.0312 18.3313 34.0312 20C34.0312 21.6688 32.675 23.0313 31 23.0313ZM6 14C8.20625 14 10 12.2063 10 10C10 7.79376 8.20625 6.00001 6 6.00001C3.79375 6.00001 2 7.79376 2 10C2 12.2063 3.79375 14 6 14ZM20 16C20.1187 16 20.2313 15.9688 20.35 15.9625C20.8687 14.6063 21.6313 13.3313 22.6187 12.2625C23.0812 11.7625 23.7375 11.475 24.425 11.475C24.8562 11.475 25.2812 11.5875 25.65 11.8063L26.1437 12.0938C26.1937 12.0625 26.2438 12.0375 26.2938 12.0063C26.7313 11.0938 26.9937 10.0813 26.9937 9.00626C26.9937 5.13751 23.8625 2.00626 19.9937 2.00626C16.125 2.00626 13 5.13126 13 9.00001C13 12.8688 16.1313 16 20 16ZM26.575 28.1563C26.4313 28.0813 26.2875 27.9938 26.15 27.9125C25.6375 28.2125 25.1938 28.525 24.4312 28.525C23.75 28.525 23.0938 28.2375 22.625 27.7375C21.4813 26.5 20.6062 24.9938 20.1125 23.3875C19.4437 21.2313 21.6688 20.2813 21.725 20.2438C21.7188 20.0813 21.7188 19.9188 21.725 19.7563L21.2313 19.4688C20.9938 19.3313 20.7937 19.1563 20.6187 18.9625C20.4125 18.975 20.2125 19 20.0063 19C18.4688 19 17.0312 18.625 15.725 18H15.2063C11.225 18 8 21.225 8 25.2V27C8 28.6563 9.34375 30 11 30H26.9625C26.7312 29.625 26.575 29.2 26.575 28.7313V28.1563ZM10.8188 17.1625C10.0938 16.4438 9.1 16 8 16H4C1.79375 16 0 17.7938 0 20V22C0 23.1063 0.89375 24 2 24H6.11875C6.5125 21.0375 8.3 18.5438 10.8188 17.1625Z" fill="#876CFE" />
                                    </svg>
                                </div>
                                <div class="media-support-info ml-3">
                                    <h5 class="text-info"></h5>
                                    <p class="mb-0">Total Staff</p>
                                </div>
                                <div class="media-support-amount ml-3">
                                    <div id="salon2-chart-01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="col-xl-9 col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height salon-2-back" style="background: url({{asset('assets/images/layouts/layout-12/11.png')}}) no-repeat; background-size: cover;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="mt-4 mb-4">
                                        <h4>{{$greeting}} </h4>
                                        <h1 class="mt-5">Mr. {{Auth::user()->name}}</h1>
                                        <h5 class="mt-3">{{date('j F Y - g:i a')}}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body res-block">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="bg-danger-light icon iq-icon-box mr-2 rounded">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M22 6C22 2.68625 19.3137 0 16 0C12.6862 0 10 2.68625 10 6C10 9.31375 12.6862 12 16 12C19.3137 12 22 9.31375 22 6ZM14.5994 15.0688C10.8912 12.7987 4.885 12.175 1.8625 12.0031C0.846875 11.9456 0 12.7194 0 13.6962V27.6213C0 28.5169 0.724375 29.2638 1.65562 29.3119C4.38438 29.455 9.905 29.9794 13.7206 31.9013C14.3062 32.1963 15.0006 31.7944 15.0006 31.1594V15.785C15 15.4931 14.8556 15.2256 14.5994 15.0688ZM30.1375 12.0031C27.1156 12.1744 21.1088 12.7987 17.4013 15.0688C17.145 15.2256 17.0006 15.5037 17.0006 15.7956V31.1575C17.0006 31.7944 17.6969 32.1969 18.2844 31.9013C22.0994 29.9813 27.6169 29.4569 30.345 29.3137C31.2762 29.265 32.0006 28.5181 32.0006 27.6225V13.6962C32 12.7194 31.1531 11.9456 30.1375 12.0031Z" fill="#FF4B4B" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip1">
                                                    <rect width="32" height="32" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="media-support-danger salon-2 ml-3 flex-1">
                                        <h5 class="text-danger"></h5>
                                        <p class="mb-0">Bookings</p>
                                    </div>
                                </div>
                                <div class="media-support-amount ml-3">
                                    <div class="progress-round income-progress salon2-progress-danger mx-auto" data-value="46">
                                            <span class="progress-left">
                                                <span class="progress-bar border-white" style="transform: rotate(0deg);"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-danger" style="transform: rotate(150deg);"></span>
                                            </span>
                                    <div
                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                            <div class="h4 mb-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body res-block">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="bg-success-light icon iq-icon-box mr-2 rounded">
                                        <svg width="24" height="32" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.5625 6.5625L17.4438 0.4375C17.1625 0.15625 16.7812 0 16.3813 0H16V8H24V7.61875C24 7.225 23.8438 6.84375 23.5625 6.5625ZM14 8.5V0H1.5C0.66875 0 0 0.66875 0 1.5V30.5C0 31.3312 0.66875 32 1.5 32H22.5C23.3312 32 24 31.3312 24 30.5V10H15.5C14.675 10 14 9.325 14 8.5ZM4 4.5C4 4.22375 4.22375 4 4.5 4H9.5C9.77625 4 10 4.22375 10 4.5V5.5C10 5.77625 9.77625 6 9.5 6H4.5C4.22375 6 4 5.77625 4 5.5V4.5ZM4 9.5V8.5C4 8.22375 4.22375 8 4.5 8H9.5C9.77625 8 10 8.22375 10 8.5V9.5C10 9.77625 9.77625 10 9.5 10H4.5C4.22375 10 4 9.77625 4 9.5ZM13 25.9925V27.5C13 27.7763 12.7762 28 12.5 28H11.5C11.2238 28 11 27.7763 11 27.5V25.9819C10.2944 25.9456 9.60813 25.6994 9.03938 25.2725C8.79563 25.0894 8.78312 24.7244 9.00375 24.5138L9.73812 23.8131C9.91125 23.6481 10.1687 23.6406 10.3713 23.7675C10.6131 23.9188 10.8875 24 11.1725 24H12.9294C13.3356 24 13.6669 23.63 13.6669 23.1756C13.6669 22.8037 13.4412 22.4762 13.1187 22.38L10.3062 21.5362C9.14437 21.1875 8.3325 20.0725 8.3325 18.8244C8.3325 17.2919 9.52313 16.0469 10.9994 16.0075V14.5C10.9994 14.2238 11.2231 14 11.4994 14H12.4994C12.7756 14 12.9994 14.2238 12.9994 14.5V16.0181C13.705 16.0544 14.3912 16.3 14.96 16.7275C15.2037 16.9106 15.2162 17.2756 14.9956 17.4862L14.2612 18.1869C14.0881 18.3519 13.8306 18.3594 13.6281 18.2325C13.3863 18.0806 13.1119 18 12.8269 18H11.07C10.6637 18 10.3325 18.37 10.3325 18.8244C10.3325 19.1963 10.5581 19.5238 10.8806 19.62L13.6931 20.4638C14.855 20.8125 15.6669 21.9275 15.6669 23.1756C15.6669 24.7087 14.4762 25.9531 13 25.9925Z" fill="#37E6B0" />
                                        </svg>
                                    </div>
                                    <div class="media-support-success salon-2 ml-3">
                                        <h5 class="text-success"></h5>
                                        <p class="mb-0">Profit</p>
                                    </div>
                                </div>
                                <div class="media-support-amount ml-3">
                                    <div id="salon2-chart-03" class="chart-salon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Recent Laundry</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <button class="btn btn-sm btn-success">View All</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table data-table table-striped table-bordered dataTable laundromat_table" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                    <tr role="row">
                                        <th>Client Name</th>
                                        <th>Phone Number</th>
                                        <th>Quantity</th>
                                        <th>Total Cost</th>
                                        <th>Registered On</th>
                                        <th>Pickup Date</th>
                                        <th></th>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                    <div class="card card-block card-stretch card-height">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex align-items-center mb-4">--}}
{{--                                <img src="{{asset('assets/images/user/12.jpg')}}" class="img-fluid avatar-90 rounded-normal"--}}
{{--                                     alt="image">--}}
{{--                                <div class="d-flex doc-social ml-4">--}}
{{--                                    <a href="#"><i class="lab la-facebook-f text-primary font-size-20"></i></a>--}}
{{--                                    <a href="#"><i class="lab la-twitter text-primary-dark font-size-20"></i></a>--}}
{{--                                    <a href="#"><i class="lab la-instagram mr-2 text-danger font-size-20"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h4 class="text-uppercase">{{Auth::user()->name}}</h4>--}}
{{--                            <p class="font-size-16">Top Expert</p>--}}
{{--                            <div class="d-flex align-items-center pt-3">--}}
{{--                                    <span class="bg-warning-light rounded-small iq-card-icon-small mr-3">--}}
{{--                                        <i class="las la-phone-volume"></i>--}}
{{--                                    </span>--}}
{{--                                <h5>+91 01234 56789</h5>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center pt-3">--}}
{{--                                    <span class="bg-success-light rounded-small iq-card-icon-small mr-3">--}}
{{--                                        <i class="las la-envelope"></i>--}}
{{--                                    </span>--}}
{{--                                <h5>{{Auth::user()->email}}</h5>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center pt-3">--}}
{{--                                    <span class="bg-primary-light rounded-small iq-card-icon-small mr-3">--}}
{{--                                        <i class="lab la-twitter"></i>--}}
{{--                                    </span>--}}
{{--                                <h5>social@laundromat.com</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        let main_datatable = $('.laundromat_table').DataTable({
            processing: true,
            serverSide: true,
            lengthMenu: [[10,25,50],[10,25,50]],

            ajax: '{{ route('laundry_list') }}',
            columns: [
                {data: 'full_name', name: 'full_name'},
                {data: 'phone', name: 'phone'},
                {data: 'quantity', name: 'quantity'},
                {data: 'amount', name: 'amount'},
                {data: 'created_at', name: 'created_at'},
                {data: 'pickup_date', name: 'pickup_date'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],

        });
    </script>


@endsection

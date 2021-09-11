<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">{{config('app.name')}}</li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                &copy; <a href="">{{$company_name ?? 'Valar Technology Solutions'}}</a>. {{date('Y')}}
            </div>
        </div>
    </div>
</footer>

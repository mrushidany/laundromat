@extends('layouts.manager.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <h3 class="card-title pb-3">Welcome {{Auth::user()->name}}</h3>

            </div>
        </div>

        <div class="container-fluid laundry_collapse">

        </div>
    </div>


    @endsection


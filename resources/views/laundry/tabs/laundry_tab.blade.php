<div class="row">
    <div class="btn-group btn-group-toggle offset-md-10">
        <a  class="button btn btn-primary btn-sm  mr-2" href="{{route('laundry.create')}}"><i class="ri-add-line m-0"></i> Add New Laundry</a>
    </div>
</div><br><br>
<div class="row col-md-12">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group col-md-9">
                            <select class="form-control" name="recent_laundry" data-column="5">
                                <option disabled selected value="recent_laundry">Recent Laundry</option>
                                <option value="{{\Illuminate\Support\Carbon::now()->format('d/m/Y')}}">Today</option>
                                <option value="{{\Illuminate\Support\Carbon::yesterday()->format('d/m/Y')}}">Yesterday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="form-row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">From</span>
                                    </div>
                                    <input type="date" name="from_specific_date" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-small"  value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-4 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">To</span>
                                    </div>
                                    <input type="date" name="to_desired_date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-small"  value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-4">
                                    <button type="button" class="btn btn-success btn-sm mt-2 date_laundry_details_filter" style="line-height: 12px;"><i class="ri-settings-4-fill pr-0"></i>Filter</button>&nbsp;&nbsp;
                                    <button type="button" class="btn btn-primary btn-sm mt-2 date_laundry_details_refresh" style="line-height: 12px;"><i class="ri-loader-4-fill pr-0"></i>Refresh</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col offset-6">
                                <div class="input-group input-group-sm mb-4">
                                    <input type="text" name="custom_search" class="form-control" placeholder="Search" aria-label="spinners" aria-describedby="basic-addon7">
                                    <div class="input-group-append">
                                       <span class="input-group-text" id="basic-addon7"><i class="fa fa-spinner fa-spin"></i></span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div><hr>
                <div class="table-responsive">
                    <table  class="table data-table table-striped table-bordered dataTable laundromat_table" role="grid" aria-describedby="datatable_info">
                        <thead>
                        @if (Auth::user()->hasRole('owner'))
                            <th>Client Name</th>
                            <th>Phone Number</th>
                            <th>Machine Selected</th>
                            <th>Quantity</th>
                            <th>Cost to be Paid</th>
                            <th>Registered On</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        @else
                            <th>Client Name</th>
                            <th>Phone Number</th>
                            <th>Machine Selected</th>
                            <th>Quantity</th>
                            <th>Cost to be Paid</th>
                            <th>Registered On</th>
                            <th>Payment Status</th>
                        @endif

                        </thead>
                        <tfoot>
                        <tr role="row">
                            <th colspan="4" class="text-center">Total</th>
                            <th class="bg-blue font-size-14" id="laundry_table_total_cost"></th>
                            <th></th>
                            <th class="bg-green font-size-14" id="laundry_table_cashdraw_cost"></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

        <div  class="card">
            <div class="card-body">
                <div class="modal-header">
                    <h3 class="modal-title offset-md-5">Add Laundry Details</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" autocomplete="off">
                    @csrf()
                    @method('POST')
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="client_name" class="control-label">Client Full Name</label>
                                <input name="full_name" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_type" class="control-label">Phone Number</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+255</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="xxxxxxxxx" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="washing_machine" class="control-label">Select Machine</label>
                                <div class="input-group mb-4">
                                    <div class="form-check form-check-inline form-control">
                                        <input class="form-check-input" type="checkbox" id="washing_machine" value="">
                                        <label class="form-check-label control-label" onclick="event.preventDefault()" for="washing_machine">Washing Machine</label>
                                    </div>
                                    <div class="form-check form-check-inline form-control">
                                        <input class="form-check-input" type="checkbox" id="drying_machine" value="">
                                        <label class="form-check-label control-label" for="drying_machine">Drying Machine</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="laundry_quantity">Laundry Quantity in Kg</label>
                                <input type="number" min="8" step="8" class="form-control" id="laundry_quantity" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="total_cost">Total Cost</label>
                                <input type="text" class="form-control" id="total_cost" name="total_cost"  value="">
                            </div>
                            <div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 <script type="application/javascript">
     $(document).ready(function (){



         $('#washing_machine').on('change', function (){
             if ($(this).prop('checked', true) ){
                 var washing_price = 4000;
                 $('#total_cost').val(total_cost(washing_price,0));
             }
         });
         $('#drying_machine').on('change', function (){
             if ($(this).prop('checked', true)){
                 var drying_price = 4000;
                 $('#total_cost').val(total_cost(0,drying_price));
             }
         });
     });

     function total_cost(washing_price,drying_price){
        var total = add(washing_price, drying_price) +  ' ' + '/=';

        return total
     }
 </script>



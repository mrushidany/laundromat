<div class="form-card text-left">
    <div class="row">
        <div class="col-7">
            <h3 class="mb-4">Laundry Information:</h3>
        </div>
        <div class="col-5">
            <h2 class="steps">Step 1 - 3</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Client Name</label>
                <input type="text" class="form-control text-blue font-size-14" name="full_name" placeholder="Optional" value="{{$client->full_name ?? ''}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control text-blue font-size-14" name="phone" placeholder="xxxxxxxxx" value="{{$client->phone ?? ''}}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="washing_machine" >Select Machine</label>
                <div class="input-group mb-4 select_machine">
                    <div class="form-check form-check-inline">
                        <select id="multiple" class="js-states form-control" name="machine_selected" multiple style="width: 800px;">
                            <option>Machine 1</option>
                            <option>Machine 2</option>
                            <option>Machine 3</option>
                            <option>Machine 4</option>
                            <option>Machine 5</option>
                            <option>Machine 6</option>
                            <option>Machine 7</option>
                            <option>Machine 8</option>
                            <option>Machine 9</option>
                            <option>Machine 10</option>
                        </select>
                    </div>
                    <div class="form-check form-check-inline was-validated">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="drying_machine" class="custom-control-input" id="customControlValidation1" novalidate>
                            <label class="custom-control-label" for="customControlValidation1">Drying Machine</label>
                            <div class="invalid-feedback">Drying Machine Not Selected</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="laundry_quantity">Laundry Quantity in Kg</label>
                <input type="text" name="laundry_quantity" class="form-control text-blue font-size-14" id="laundry_quantity" value="{{$laundry_detail->quantity ?? ''}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="total_cost">Total Cost</label>
                <input type="text" class="form-control text-blue font-size-14" id="total_cost" name="total_cost"  value="{{$laundry_cost->amount ?? ''}}">
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $(document).ready(function (){
        var number_of_machines = 0, laundry_quantity = 0, total_cost = 0;
        $('select[name="machine_selected"]').on('change', function (){
            number_of_machines = $(this).val().length;
            laundry_quantity = 8 * number_of_machines;
            total_cost = number_of_machines * 4000;
            $('input[name="laundry_quantity"]').val(laundry_quantity + ' Kgs').trigger('change');
            $('input[name="total_cost"]').val(total_cost + ' /=').trigger('change');

            return laundry_quantity, total_cost;
        })
        $('input[name="drying_machine"]').change(function (){
            if($(this).is(':checked')){
              var total_quantity = laundry_quantity * 2;
              var cost = total_cost * 2;
              $('input[name="laundry_quantity"]').val(total_quantity + ' Kgs').trigger('change');
              $('input[name="total_cost"]').val(cost + ' /=').trigger('change');

            }else if (!$(this).is(':checked')){
                total_quantity = laundry_quantity;
                cost = total_cost;
                $('input[name="laundry_quantity"]').val(total_quantity + ' Kgs').trigger('change');
                $('input[name="total_cost"]').val(cost + ' /=').trigger('change');

            }
        })
        $('input[name="total_cost"]').on('input', function () {
            total_cost = $(this).val();
            $('input[name="total_cost"]').val(total_cost).trigger('change')

        })

    })
</script>

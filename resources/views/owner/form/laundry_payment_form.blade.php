<div class="form-card text-left">
    <div class="row">
        <div class="col-7">
            <h3 class="mb-4">Laundry Payment Information:</h3>
        </div>
        <div class="col-5">
            <h2 class="steps">Step 2 - 3</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Select the Payment Status</label>
                <select class="form-control mb-3 payment_status" name="payment_status">
                    <option disabled selected>Select the Laundry Payment Status</option>
                    <option value="Paid" >Paid</option>
                    <option value="Not Paid">Not Paid</option>
                    <option value="Partial Payment">Partial Payment</option>
                </select>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $('.payment_status').on('change',function (){
        var status = $(this).val();
        if(status == 'Partial Payment'){
            alert(status)
        }
    })
</script>

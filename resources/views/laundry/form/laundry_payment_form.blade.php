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
                    @if (isset($laundry_cost))
                        <option disabled selected>Select the Laundry Payment Status</option>
                        <option value="Paid" @if ($laundry_cost->payment_status == 'Paid') selected @endif>Paid</option>
                        <option value="Not Paid" @if ($laundry_cost->payment_status == 'Not Paid') selected @endif>Not Paid</option>
                        <option value="Partial Payment" @if ($laundry_cost->payment_status == 'Partial Payment') selected @endif>Partial Payment</option>
                    @else
                        <option disabled selected>Select the Laundry Payment Status</option>
                        <option value="Paid">Paid</option>
                        <option value="Not Paid">Not Paid</option>
                        <option value="Partial Payment">Partial Payment</option>
                    @endif

                </select>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-md" id="payment_status_modal" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title offset-5">Partial Payment Status Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="total_cost" class="control-label">Total Cost</label>
                        <input type="text" name="total_cost" class="form-control text-blue font-size-14" readonly value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="initial_payment" class="control-label">Partial Payment</label>
                        <input  type="text" name="initial_payment" class="form-control text-blue font-size-14" value="">
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Verify Partial Payment</button>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $('.payment_status').on('change',function (){
        $modal = $('#payment_status_modal')
        if($(this).val() === 'Partial Payment'){
            $modal.modal('show')
        }
    })
</script>

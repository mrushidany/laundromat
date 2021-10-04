<div  class="card">
    <div class="card-body">
        <form action="" method="POST" autocomplete="off">
            <div class="modal-header">
                <h3 class="modal-title offset-md-5" >Payment Term Information</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name" class="control-label">Client Name</label>
                        <input id="name" type="text" name="full_name" class="form-control" value="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name" class="control-label">Phone Number</label>
                        <input id="name" type="text" name="phone" class="form-control" value="">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="washing_machine" >Select Machine</label>
                                <div class="input-group mb-4 select_machine">
                                    <div class="form-check form-check-inline">
                                        <select id="multiple" class="js-states form-control" name="machine_selected" multiple style="width: 800px;" >
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
                                            <input type="checkbox" name="drying_machine" class="custom-control-input" id="customControlValidation1" required="">
                                            <label class="custom-control-label" for="customControlValidation1">Drying Machine</label>
                                            <div class="invalid-feedback">Drying Machine Not Selected</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="mode_of_payment" class="control-label">Mode Of Payment</label>
                        <input id="mode_of_payment" type="text" name="mode_of_payment" class="form-control" value="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="credit_days" class="control-label">Credit Days</label>
                        <select id="multiple" class="js-states form-control" multiple>
                            <option>Red</option>
                            <option>Green</option>
                            <option>Blue</option>
                            <option>Yellow</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save </button>
            </div>
        </form>
    </div>
</div>

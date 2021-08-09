<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div  class="card">
            <div class="card-body">
                <div class="modal-header">
                    <h5 class="modal-title offset-md-5">Add Laundry Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" autocomplete="off">
                    @csrf()
                    @method('POST')
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="client_name" class="control-label">Client Name</label>
                                <input name="client_name" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input_type" class="control-label">Agricultural Input Type</label>
                                <select name="agricultural_input_type" class="form-control" >
                                    <option></option>
                                    <option value="Manure">Manure</option>
                                    <option value="PestiCide">PestiCide</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="issued_by" class="control-label">Issued By</label>
                                <select name="issued_by" class="form-control" >
                                    <option></option>
                                    <option value="Investor">Investor</option>
                                    <option value="Government">Government</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="description">Description</label>
                                <textarea class="form-control" rows="1" name="description"></textarea>
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
    </div>
</div>


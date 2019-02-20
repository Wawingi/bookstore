<div id="modalbook" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Register Book</h4>
            </div>
            <div class="modal-body">
                <form method="post">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Title</label>
                                <input required="" type="text" class="form-control" name="title" placeholder="ex: Learn PHP ">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Type</label>
                                <input required="" type="text" class="form-control" name="type" placeholder="ex: New ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-3" class="control-label">ISBN</label>
                                <input required="" type="text" class="form-control" name="isbn" placeholder="ex: AASS">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Price</label>
                                <input required="" type="text" class="form-control" name="price" placeholder="ex: $ 100.00">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Authors</label>
                                <input required="" type="text" class="form-control" name="author" placeholder="ex: James Gosling, Ada Lovelace">
                            </div>
                        </div>
                    </div>                    
                    <input type="hidden" value="register" name="operation">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" name="register" class="btn btn-info waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

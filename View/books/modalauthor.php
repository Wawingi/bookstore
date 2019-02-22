<div id="modalauthor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Register Author</h4>
            </div>
            <div class="modal-body">
                <form method="post">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Name</label>
                                <input required="" type="text" class="form-control" name="name" placeholder="write the author name">
                                <input type="hidden" value="<?php echo $getbook->id ?>" name="id_book">
                            </div>
                        </div>    
                    </div>          
                    <input type="hidden" value="register_author" name="operation">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" name="register_author" class="btn btn-info waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

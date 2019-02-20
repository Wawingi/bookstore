<div id="modaldpt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Atribuir Nota </h4>
            </div>
            <div class="modal-body">
                <form method="post">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Responsável</label>
                                <input required="" type="text" class="form-control" name="responsavel" placeholder="ex: João de Almeida Brandão">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Nota</label>
                                <select class="custom-select mt-3" name="nota">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo $pegaProjecto->id; ?>" name="id_projecto">
                    <input type="hidden" value="registar" name="operacao">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                        <button type="submit" name="registar" class="btn btn-info waves-effect waves-light">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

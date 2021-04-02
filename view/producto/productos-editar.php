<div class="form-group row">
    <label class="col-md-3 form-control-label" for="txtCodigo">Codigo</label>
    <div class="col-md-9">
        <input type="number" id="txtCodigo" name="txtCodigo" class="form-control" placeholder="Ingrese la nombre" required data-validacion-tipo="requerido|min:3" maxlength="10">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="txtNombre">Nombre</label>
    <div class="col-md-9">
        <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese la nombre" required data-validacion-tipo="requerido|min:3" maxlength="20">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="txtPrecio">Precio Venta</label>
    <div class="col-md-9">
        <input type="number" id="txtPrecio" name="txtPrecio" class="form-control" placeholder="Ingrese el precio venta" required pattern="^[a-zA-Z_áéíóúñ\s]{0,100}$" step="0.01" min="1">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="txtImpuesto">Impuesto</label>
    <div class="col-md-9">
        <input type="number" id="txtImpuesto" name="txtImpuesto" class="form-control" placeholder="Ingrese el impuesto" required pattern="[0-9]{1,3}(\,[0-9]{3})" step="0.01" minlength="1" maxlength="4" >
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
    <button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>
</div>
<!-- <script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    });
</script> -->
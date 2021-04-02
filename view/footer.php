        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
            Desarrollado por <a href="https://www.facebook.com/irwinmicchel.egueszafra">Irwin Egües</a>
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="assets2/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="assets2/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="assets2/dist/js/adminlte.min.js"></script>
      <!-- Alert2 -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <!-- Datatable js-->
      <script type="text/javascript" src="assets2/datatables/datatables.min.js"></script>
      <!-- Datatable accion css-->
      <script type="text/javascript" src="assets2/main.js"></script>
<script>
"use strict";
/*EDITAR PRODUCTO EN VENTANA MODAL*/
$('#m-open-modal-edit').on('show.bs.modal', function (event) {
/*el button.data es lo que está en el button de editar*/
var button = $(event.relatedTarget);
var code_modal_edit = button.data('code');
var name_modal_edit = button.data('name');
var sale_price_modal_edit = button.data('sale_price');
var igv_modal_edit = button.data('igv');

var id_product = button.data('id_product');
var modal = $(this);
// modal.find('.modal-title').text('New message to ' + recipient)
/*los # son los id que se encuentran en el formulario*/
modal.find('.modal-body #txtCodigo').val(code_modal_edit);
modal.find('.modal-body #txtNombre').val(name_modal_edit);
modal.find('.modal-body #txtPrecio').val(sale_price_modal_edit);
modal.find('.modal-body #txtImpuesto').val(igv_modal_edit);
// modal.find('.modal-body #subirImagen').html("<img src="img/producto/imagen_modal_editar">");
modal.find('.modal-body #txtId').val(id_product);
});
$('#m-open-modal-view').on('show.bs.modal', function (event) {
/*el button.data es lo que está en el button de editar*/

var button = $(event.relatedTarget);
var code_modal_edit = button.data('code');
var name_modal_edit = button.data('name');
var sale_price_modal_edit = button.data('sale_price');
var igv_modal_edit = button.data('igv');
// debugger
// var id_product = button.data('id_product');
var modal = $(this);
// modal.find('.modal-title').text('New message to ' + recipient)
/*los # son los id que se encuentran en el formulario*/
modal.find('.modal-body #txtCodigo').text(code_modal_edit);
modal.find('.modal-body #txtNombre').text(name_modal_edit);
modal.find('.modal-body #txtPrecio').text(sale_price_modal_edit);
modal.find('.modal-body #txtImpuesto').text(igv_modal_edit);
// modal.find('.modal-body #subirImagen').html("<img src="img/producto/imagen_modal_editar">");
// modal.find('.modal-body #txtId').val(id_product);
});

$('#m-change-status').on('show.bs.modal', function (event) {
//console.log('modal abierto');
var button = $(event.relatedTarget);
var id_product = button.data('id_product');
var modal = $(this);
modal.find('.modal-body #txtId').val(id_product);
});
function alertMetodoNoDisponible(){
  Swal.fire(
  'Acción no disponible',
  'Para mayor información contactar con el desarrollador vía correo <a href="mailto: ieguesz278@gmail.com">ieguesz278@gmail.com</a> o Whatsapp <a href="https://api.whatsapp.com/send?phone=51969710483">969710483</a> ',
  'question'
);
}
</script>

    </body>
  </html>
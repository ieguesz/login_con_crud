<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Productos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#" onclick="alertMetodoNoDisponible();">Home</a></li>
                    <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12">
                            <a href="#"  class="btn btn-default" onclick="alertMetodoNoDisponible();"><i class="fas fa-print" ></i> Imprimir</a>
                            <a class="btn btn-primary float-right" data-toggle="modal" data-target="#m-open-modal-create"><i class="far fa-credit-card"></i> Nuevo producto
                            </a>
                            <a href="?c=Productos&a=showReport" class="btn btn-success float-right" style="margin-right: 5px;">
                                <i class="fas fa-download"></i> Generate Reporte
                            </a>
                        </div>
                        <!--                                        <div class="text-left">
                            <a class="btn btn-primary" href="?c=Productos&a=ConsultaCrud">+</a>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-primary" href="?c=Productos&a=ConsultaCrud">Nuevo producto </a>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <div class="well well-sm">
                            <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <!--tabla sus columnas-->
                                    <tr>
                                        <th>#</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Impuesto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $cont=1; ?>
                                    <!--Incio del foreach para cargar los datos-->
                                    <?php foreach($this->model->Show() as $r): ?>
                                    <tr>
                                        <td><?php echo $cont; ?></td>
                                        <td><?php echo 'P-'.$r->codigo; ?></td>
                                        <td><?php echo ucfirst($r->nombre); ?></td>
                                        <td><?php echo 'S/.'.$r->precio; ?></td>
                                        <td><?php echo $r->impuesto; ?></td>
                                        <td>
                                            <a class="btn btn-info"
                                                data-id_product="<?php echo $r->id_productos; ?>"
                                                data-code="<?php echo $r->codigo; ?>"
                                                data-name="<?php echo $r->nombre; ?>"
                                                data-igv="<?php echo $r->impuesto; ?>"
                                                data-sale_price="<?php echo $r->precio; ?>"
                                                data-toggle="modal"
                                            data-target="#m-open-modal-view"><i class="far fa-eye"></i></a>
                                            <a class="btn btn-primary"
                                                data-id_product="<?php echo $r->id_productos; ?>"
                                                data-code="<?php echo $r->codigo; ?>"
                                                data-name="<?php echo $r->nombre; ?>"
                                                data-igv="<?php echo $r->impuesto; ?>"
                                                data-sale_price="<?php echo $r->precio; ?>"
                                                data-toggle="modal"
                                            data-target="#m-open-modal-edit"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" onclick="javascript:return confirm('Seguro de eliminar el producto');" href="?c=Productos&a=EliminarCrud&id=<?php echo $r->id_productos; ?>"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php $cont++; ?>
                                    <?php endforeach; ?>
                                    <!--Finalizar el foreach-->
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </section>
        <!--Creo un espacion con color de sombra horizontal .  y el text-right es poner a derecha-->
        <!--Inicio del modal agregar/actualizar-->
        <div class="modal fade" id="m-open-modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-producto" action="?c=Productos&a=GuardarCrud" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <?php include 'productos-editar.php'; ?>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        </div>
        <!--Inicio del modal agregar/actualizar-->
        <div class="modal fade" id="m-open-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Actualizar producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="?c=Productos&a=GuardarCrud" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" id="txtId" name="txtId" value="">
                            <?php include 'productos-editar.php'; ?>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        </div>
        <div class="modal fade" id="m-open-modal-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include 'productos-ver.php'; ?>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        </div>
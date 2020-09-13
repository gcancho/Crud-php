<?php include('db.php') ?>
<?php include('includes/header.php') ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <!-- Si existe variable mensaje dentro de la sesion -->
            <?php if (isset($_SESSION["mensaje"])) { ?>

                <!-- El color del boton lo trae desde una variable de guardar_tarea.php -->
                <div class="alert alert-<?= $_SESSION["tipo_mensaje"] ?> alert-dismissible fade show" role="alert">
                   
                <!-- El texto lo trae desde una variable de guardar_tarea.php -->
                <?= $_SESSION["mensaje"]?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <!-- Limpiar los datos que tenemos en sesion -->
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="guardar_tarea.php" method="post">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo de tarea" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de tarea"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="Guardar Tarea">
                </form>
            </div>
        </div>

        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>
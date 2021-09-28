<?php
include("components/head.php");
include("../models/model.php");
$conexion = conexion();
$id = $_GET['id'];
if (isset($id)) {
  $sql = "SELECT * FROM almacen WHERE id=$id";
  $resultado = mysqli_query($conexion, $sql);
  $row = (mysqli_fetch_array($resultado));
?>

  <!-- Cuerpo del documento -->
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-4 is-offset-1">
        <h1 class="title is-2">Editar usuario</h1>
        <form name="frmdatos" action="../controllers/crud.php" method="POST">
          <div class="field">
            <label class="label">Nombre</label>
            <div class="control">
              <input class="input" name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?php echo $row["nombre"] ?>">
            </div>
          </div>
          <div class="field">
            <label class="label">Cantidad</label>
            <div class="control">
              <input class="input" name="cantidad" id="cantidad" type="number" placeholder="0" size="20" value="<?php echo $row["cantidad"] ?>">
            </div>
          </div>
          <div class="field">
            <label class="label">Clave</label>
            <div class="control">
              <input class="input" name="idElemento" id="idElemento" type="text" placeholder="CLave" value="<?php echo $row["id_elemento"] ?>">
            </div>
          </div>
          <div class="field">
            <label class="label">Descripcion</label>
            <div class="control">
              <textarea class="textarea" name="descripcion" id="descripcion" cols="25" rows="5"><?php echo $row["descripcion"] ?></textarea>
            </div>
          </div>
          <div class="field">
            <input class="input" type="hidden" id="id" name="id" value="<?php echo $row["id"] ?>">
          </div>

          <div class="control">
            <button id="editar" name="editar" class="button is-success">&nbsp;Actualizar datos&nbsp;</button>
            <a id="cancel" name="cancel" class="button is-danger" href="../../index.php">&nbsp;cancelar&nbsp;</a>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- pié de página -->
<?php }
include("components/footer.php")
?>
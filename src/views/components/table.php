<div class="section" style="padding-top: 8px;">
  <div class="container">
    <div class="columns">
      <div class="column is-3 is-offset-9">
        <button onclick="openmodal()" class="button is-success px-6 mb-3" type="button" name="AddModal" id="AddModal" data-target=aria-haspopup="true"><i class="fas fa-plus"></i></button>
      </div>
    </div>
  </div>
  <div class="table-container">
    <table class="table is-striped is-narrow is-hoverable is-fullwidth">
      <thead class="has-background-link-light">
        <tr>
          <th class="">#</th>
          <th class="">Nombre</th>
          <th class="">Cantidad</th>
          <th class="">Descripcion</th>
          <th class="">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($elements)) {  ?>
          <tr>
            <td><?php echo $row["id_elemento"]; ?></td>
            <td class=""><?php echo $row["nombre"]; ?></td>
            <td class=""><?php echo $row["cantidad"]; ?></td>
            <td class=""><?php echo $row["descripcion"]; ?></td>
            <td class="">
            <a type="button" class="button is-link" href="src/views/edit.php?id=<?php echo $row['id']?>"><i class="fas fa-user-edit"></i></a>
              <a class="button is-danger" id="eliminar" name="eliminar" href="src/controllers/crud.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
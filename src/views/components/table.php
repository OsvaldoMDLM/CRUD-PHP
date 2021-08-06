<div class="section">
    <div class="table-container">
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">
            <thead class="has-background-link-light">
                <tr>
                    <th class="">#</th>
                    <th class="">Imagen</th>
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
                        <td class="">
                            <figure class="image is-65x64">
                                <?php echo $row["imagen"]; ?>
                            </figure>
                        </td>
                        <td class=""><?php echo $row["nombre"]; ?></td>
                        <td class=""><?php echo $row["cantidad"]; ?></td>
                        <td class=""><?php echo $row["descripcion"]; ?></td>
                        <td class="">
                            <a type="button" class="button is-info" href="../view/edituser.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit"></i></a>
                            <a class="button is-danger" id="eliminar" name="eliminar" href="src/controllers/crud.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
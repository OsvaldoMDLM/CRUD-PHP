<div class="container">
    <div class="end">
        <a class="button" type="button" name="Add" id="Add" data-target=aria-haspopup="true"><i class="fas fa-plus"></i></a>
    </div>
    <div class="table-container">
        <table class="table">
            <thead class="">
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
                        <td class=""><?php echo $row["imagen"]; ?></td>
                        <td class=""><?php echo $row["nombre"]; ?></td>
                        <td class=""><?php echo $row["cantidad"]; ?></td>
                        <td class=""><?php echo $row["descripcion"]; ?></td>
                        <td>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal" id="addmodal">
  <div class="modal-background close-modal"></div>
  <form action="" method="POST" class="" enctype="multipart/form-data">
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title has-text-centered">Agregar Elemento</p>
        <button class="delete close-modal" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <input class="input" name="nombreAdd" id="nombreAdd" type="text" placeholder="Nombre" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Cantidad</label>
          <div class="control">
            <input class="input" name="cantidadAdd" id="cantidadAdd" type="number" placeholder="0" size="20" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Clave</label>
          <div class="control">
            <input class="input" name="idElementoAdd" id="idElementoAdd" type="text" placeholder="CLave" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Descripcion</label>
          <div class="control">
            <textarea class="textarea" name="descripcionAdd" id="descripcionAdd" cols="25" rows="5" required></textarea>
          </div>
        </div>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" id="AddElement" name="AddElement">Agregar</button>
        <button class=" button close-modal">Cancelar</button>
      </footer>
  </form>
</div>
</div>
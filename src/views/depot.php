<?php include("components/head.php"); ?>

<section class="hero is-small is-link">
    <div class="hero-body">
        <p class="title">
            Almacen
        </p>
    </div>
</section>
<?php
include_once("src/models/model.php");
include("src/controllers/crud.php");
?>

<div class="container is-flex">
    <div class="field has-addons">
        <div class="control">
            <input class="input" type="text" placeholder="Find a repository">
        </div>
        <div class="control">
            <a class="button is-info">
                Search
            </a>
        </div>
    </div>
    <div class="mx-6 mt-4">
        <button onclick="openmodal()" class="button is-success PX-5 modal-button" type="button" name="AddModal" id="AddModal" data-target=aria-haspopup="true"><i class="fas fa-plus"></i></button>
    </div>
</div>
<?php include("add.php"); ?>

<?php
$elements = getElements();
include("components/table.php"); ?>

<?php
include("components/footer.php");
?>
<script src="public/js/script.js"></script>
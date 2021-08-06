<?php include("components/head.php"); ?>

<section class="hero is-small is-link">
    <div class="hero-body">
        <p class="title">

        </p>
    </div>
</section>
<?php
include_once("src/models/model.php");
include("src/controllers/crud.php");
?>
<div class="container mx-6 mt-4 is-flex is-justify-content-center">
    <div class="field has-addons">
        <div class="control">
            <input class="input" type="text" placeholder="item">
        </div>
        <div class="control">
            <a class="button is-info">
                Buscar
            </a>
        </div>
    </div>
</div>

<?php include("add.php"); ?>
<?php include("edit.php"); ?>

<?php
$elements = getElements();
include("components/table.php"); ?>

<?php
include("components/footer.php");
?>
<script src="public/js/script.js"></script>
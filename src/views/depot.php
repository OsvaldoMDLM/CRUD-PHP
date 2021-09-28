<?php include("components/head.php"); ?>

<section class="hero is-small is-link mb-6">
  <div class="hero-body has-text-centered">
    <p class="title">
      mi primer CRUD
    </p>
  </div>
</section>
<?php
include_once("src/models/model.php");
include("src/controllers/crud.php");
?>

<?php include("add.php"); ?>

<?php
$elements = getElements();
include("components/table.php"); ?>

<?php
include("components/footer.php");
?>
<script src="public/js/script.js"></script>
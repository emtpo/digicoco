<?php

require("header.php");
?>

    <?php if(isset($_GET["errorMessage"])){ ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <?= $_GET["errorMessage"] ?>
            <button class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>


<div class="container">
    <div class="row">
        <form action="functions/createUser.php" class="col-mid-6 mt-5" method="post">
            <h1>Connexion</h1>
            <div class="form-group">
                <input type="text" name="pseudo" placeholder="Your pseudo" id="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Your password" id="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="confirmPassword" placeholder="Confirm password" id="form-control">
            </div>
            <div class="form-group">
                <p>Do you want to be a Coco Helper ?</p>
                <input type="checkbox" name="role" id="role" class="form-check-input">
                <label class="form-check-label" for="role"> Sur</label>
            </div>
            <div class="form-group">
                <input type="submit" value="Connexion" class="btn btn-primary" >
            </div>
        </form>
    </div>
</div>





<?
require("footer.php");
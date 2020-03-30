<?php
require("header.php");

if(isset($_SESSION["pseudo"])){
    header("Location: index.php");
}
?>
<div class="container">
    <div class="row">
        <form action="functions/loginUser.php" class="col-md-6 mt-5" method="post">
            <h1>Connexion</h1>
           
            <?php if(isset($_GET["errorMessage"])){ ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?= $_GET["errorMessage"] ?>
                    <button class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Votre password">
            </div>

            <a href="register.php">Pas encore de compte ?</a>

            <div class="form-group">
                <input type="submit" value="Connexion" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>


<?php
require("footer.php");
?>
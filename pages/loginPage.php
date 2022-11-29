<?php
include '../uc/login/loginController.php';
?>
<!doctype html>
<html lang="en">
<?php include '../templates/head.php'; ?>
<body>
<?php include '../templates/menu.php'; ?>
<div class="container-fluid">
    <h5>Autentificare in aplicatie</h5>
    <div class="row mt-2">
        <div class="col-12">
            <?php if ($errMsg != null) { ?>
                <div class='text-danger'>
                    <?php echo $errMsg; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <form action="/pages/loginPage.php" method="post" novalidate>
        <div class="row mt-2">
            <div class="col-12">
                <label for="email" class="form-label">Adresa de email</label>
                <input type="email" class="form-control" id="email" autocomplete="false" name="email"
                       value="<?php echo $email ?>">
                <?php if ($errEmailMsg != null) { ?>
                    <div class='text-danger'>
                        <?php echo $errEmailMsg; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <label for="password" class="form-label">Parola</label>
                <input type="password" class="form-control" id="password" autocomplete="false" name="password"
                       value="<?php echo $password ?>">
                <?php if ($errPasswordMsg != null) { ?>
                    <div class='text-danger'>
                        <?php echo $errPasswordMsg; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tip"
                           id="pacient" <?php if ($tip == 'P') { ?> checked <?php } ?> value="P">
                    <label class="form-check-label" for="pacient">
                        Pacient
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tip"
                           id="medic" <?php if ($tip == 'M') { ?> checked <?php } ?> value="M">
                    <label class="form-check-label" for="medic">
                        Medic
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Autentificare</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
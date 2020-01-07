<?php
$partNb = 10;
$exerciseNb = 'TP 2';
include '../header.php';
?>
<form method="post" action="index.php" class="formParts" novalidate>
    <div class="form-group row">
    <label for="gender" class="col-form-label col-4">Civilité :</label>
    <select id="gender" name="gender" class="form-control col-8">
        <option value="woman">
            Madame
        </option>
        <option value="man">
            Monsieur
        </option>
    </select>
    </div>
    <div class="form-group row">
        <label for="lastName" class="col-form-label col-4">Nom :</label>
        <input id="lastName" name="lastName" type="text" value="" class="form-control col-8">
    </div>
    <div class="form-group row">
        <label for="firstName" class="col-form-label col-4">Prénom :</label>
        <input id="firstName" name="firstName" type="text" value="" class="form-control col-8">
    </div>
    <div class="form-group row">
        <label for="age" class="col-form-label col-4">Âge :</label>
        <input id="age" name="age" type="number" value="" class="form-control col-8">
    </div>
    <div class="form-group row">
        <label for="society" class="col-form-label col-4">Société :</label>
        <input id="society" name="society" type="text" value="" class="form-control col-8">
    </div>
    <div class="form-group row justify-content-center">
        <input type="submit" value="Inscription" class="btn btn-success">
    </div>
</form>
<?php
include '../footer.php';

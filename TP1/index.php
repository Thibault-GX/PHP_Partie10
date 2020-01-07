<?php
$partNb = 10;
$exerciseNb = 'TP 1';
include '../header.php';
include 'countriesArray.php';
?>
<form method="post" action="index.php" novalidate>
    <div id="personnalDatas" class="formParts">
        <h2 class="partsTitleSize">Partie 1 sur 3</h2>
        <p class="text-right text-black-50">Les champs marqués du caractère <span class="text-danger">*</span> sont obligatoires.</p>
        <label for="lastName"><span class="text-danger">*</span> Votre nom :</label>
        <div class="w-100 p-1"></div>
        <input id="lastName" name="lastName" type="text" placeholder="Ranou" required>
        <div class="w-100 p-1"></div>
        <label for="firstName"><span class="text-danger">*</span> Votre prénom :</label>
        <div class="w-100 p-1"></div>
        <input id="firstName" name="firstName" type="text" placeholder="Monique" required>
        <div class="w-100 p-1"></div>
        <label for="birthDate"><span class="text-danger">*</span> Votre date de naissance :</label>
        <div class="w-100 p-1"></div>
        <input id="birthDate" name="birthDate" type="text" placeholder="jj/mm/aaaa" required>
        <div class="w-100 p-1"></div>
        <label for="birthCountry"><span class="text-danger">*</span> Votre pays de naissance :</label>
        <div class="w-100 p-1"></div>
        <select id="birthCountry" name="country">
            <option value="">Sélectionnez</option>
            <?php
            foreach ($countries as $countryId => $country) {
                echo '<option value="' . $countryId . '">' . $country . '</option>';
            }
            ?>
        </select>
        <div class="w-100 p-1"></div>
        <label for="userNationality"><span class="text-danger">*</span> Votre nationalité :</label>
        <div class="w-100 p-1"></div>
        <select id="userNationality" name="nationality">
            <option value="">Sélectionnez</option>
            <?php
            foreach ($nationalities as $nationalityId => $nationalityName) {
                echo '<option value="' . $nationalityId . '">' . $nationalityName . '</option>';
            }
            ?>
        </select>
        <div class="w-100 p-1"></div>
        <label for="userMainAddress"><span class="text-danger">*</span> Votre adresse :</label>
        <input id="userMainAddress" name="address" placeholder="3, Rue du Cirque" required>
        <div class="w-100 p-1"></div>
        <label for="userComplementaryAddress">Complément d'adresse :</label>
        <input id="userComplementaryAddress" name="complementaryAddress" placeholder="Bâtiment, étage, etc.">
        <div class="w-100 p-1"></div>
        <label for="userZipCode"><span class="text-danger">*</span> Code postal :</label>
        <input id="userZipCode" name="zipCode" placeholder="80000" required>
        <label for="userCity"><span class="text-danger">*</span> Ville :</label>
        <input id="userCity" name="city" placeholder="Amiens" required>
        <div class="w-100 p-1"></div>
        <label for="userEmail"><span class="text-danger">*</span> Votre adresse email :</label>
        <div class="w-100 p-1"></div>
        <input id="userEmail" name="email" required>
        <div class="w-100 p-1"></div>
        <label for="userPhone"><span class="text-danger">*</span> Votre numéro de téléphone :</label>
        <div class="w-100 p-1"></div>
        <input id="userPhone" name="phone" required>
        <div class="w-100 p-4"></div>
        <div class="d-flex justify-content-end"><button id="fromStep1ToStep2" type="button" class="btn btn-dark">Etape suivante ></button></div>
    </div>
    <div class="w-100 p-1"></div>
    <div id="skillAndProfessionalDatas" class="formParts">
        <h2 class="partsTitleSize">Partie 2 sur 3</h2>
        <p class="text-right text-black-50">Les champs marqués du caractère <span class="text-danger">*</span> sont obligatoires.</p>
        <label for="diplomas"><span class="text-danger">*</span> Vos diplômes :</label>
        <div class="w-100 p-1"></div>
        <select id="diplomas" name="diplomas">
            <option value="without">Sans</option>
            <option value="bac">Bac</option>
            <option value="bac2">Bac +2</option>
            <option value="bac3">Bac +3</option>
            <option value="superiorToBac3">Diplôme de niveau supérieur </option>
        </select>
        <div class="w-100 p-1"></div>
        <label for="poleEmploiID">Votre numéro Pôle Emploi :</label>
        <div class="w-100 p-1"></div>
        <input id="poleEmploiID" name="poleEmploiID">
        <div class="w-100 p-1"></div>
        <label for="badgeNb"><span class="text-danger">*</span> Votre nombre de badges Codecademy :</label>
        <div class="w-100 p-1"></div>
        <input id="badgeNb" name="badgeNb" required>
        <div class="w-100 p-1"></div>
        <label for="codecademyLink"><span class="text-danger">*</span> Lien vers votre profil Codecademy :</label>
        <div class="w-100 p-1"></div>
        <input id="codecademyLink" name="codecademyLink" required>
        <div class="w-100 p-4"></div>
        <div class="d-flex justify-content-between"><button id="fromStep2ToStep1" type="button" class="btn btn-dark">&lt; Etape précédente</button><button id="fromStep2ToStep3" type="button" class="btn btn-dark">Etape suivante ></button></div>
    </div>
    <div class="w-100 p-1"></div>
    <div id="personnalStories" class="formParts">
        <h2 class="partsTitleSize">Partie 3 sur 3</h2>
        <p class="text-right text-black-50">Les champs marqués du caractère <span class="text-danger">*</span> sont obligatoires.</p>
        <label for="ifHero"><span class="text-danger">*</span> Si vous étiez une héroïne/un héros, qui seriez-vous et pourquoi ?</label>
        <div class="w-100 p-1"></div>
        <textarea id="ifHero" name="ifHero" cols="40" rows="6"></textarea>
        <div class="w-100 p-1"></div>
        <label for="personalHack"><span class="text-danger">*</span> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
        <div class="w-100 p-1"></div>
        <textarea id="personalHack" name="personalHack" cols="40" rows="6"></textarea>
        <div class="w-100 p-1"></div>
        <label><span class="text-danger">*</span> Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
        <div>
            <input type="radio" id="yes" name="previousDevelopperExperience" value="yes">
            <label for="yes">Oui</label>
        </div>
        <div>
            <input type="radio" id="no" name="previousDevelopperExperience" value="no">
            <label for="no">Non</label>
        </div>
        <div class="w-100 p-1"></div>
        <div class="d-flex justify-content-center"><input type="submit" class="btn btn-success w-50 font-weight-bold" value="Je m'inscris !"/></div>
        <div class="w-100 p-4"></div>
        <button id="fromStep3ToStep2" type="button" class="btn btn-dark">&lt; Etape précédente</button>
    </div>
</form>
<?php
include '../footer.php';

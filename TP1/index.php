<?php
$partNb = 10;
$exerciseNb = 'TP 1';
include '../header.php';
include 'countriesArray.php';
// Regex list
//regexCodecademy = #[^https://www\.codecademy\.com/profiles/]#;
//regexPhone = #^0[1-68]([-. ]?[0-9]{2}){4}$#;
//regexMail = #^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$#;
//regexNames = #^[A-Z]{1}[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ\-' ]{1,}#;
//regexRegulartext = #^[A-Z]{1}[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ\-,.'() ]{1,}#;
//regexCodecademyBadges = #[0-9]{1,}#;
//regexZipCode = #[0-9]{5}#;
?>
<form method="post" action="index.php">
    <div id="personnalDatas">
        <h2 class="partsTitleSize">Partie 1/3</h2>
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
    <select name="country">
        <option value="">Sélectionnez</option>
        <?php
        foreach ($countries as $countryId => $country) {
            if ($country == 'France') {
                echo '<option value="' . $countryId . '" selected>' . $country . '</option>';
            } else {
                echo '<option value="' . $countryId . '">' . $country . '</option>';
            }
        }
        ?>
    </select>
    <div class="w-100 p-1"></div>
        <label><span class="text-danger">*</span> Votre nationalité :</label>
        <div class="w-100 p-1"></div>
        <input type="radio" id="french" name="nationality" value="french">
        <label for="french">Français/e</label>
        <div class="w-100 p-1"></div>
        <input type="radio" id="other" name="nationality" value="other">
        <label for="otherPrecised">Autre, précisez : <input id="otherPrecised" placeholder="Breton/ne"></label>
        <div class="w-100 p-1"></div>
        <label for="adress"><span class="text-danger">*</span> Votre adresse :</label>
        <div class="w-100 p-1"></div>
        <textarea id="adress" rows="3" cols="30" name="adress" placeholder="3, Rue du Pigeonnier&#x0a;Bâtiment 4, Volière C&#x0a;80000, Amiens"></textarea required>
        <div class="w-100 p-1"></div>
        <label for="email"><span class="text-danger">*</span> Votre adresse email :</label>
        <div class="w-100 p-1"></div>
        <input id="email" name="email" required>
        <div class="w-100 p-1"></div>
        <label for="phone"><span class="text-danger">*</span> Votre numéro de téléphone :</label>
        <div class="w-100 p-1"></div>
        <input id="phone" name="phone" required>
    </div>
    <div class="w-100 p-1"></div>
    <div id="skillAndProfessionalDatas">
        <h2 class="partsTitleSize">Partie 2/3</h2>
        <p class="text-right text-black-50">Les champs marqués du caractère <span class="text-danger">*</span> sont obligatoires.</p>
        <label for="diplomas"><span class="text-danger">*</span> Vos diplômes :</label>
        <div class="w-100 p-1"></div>
        <select id="diplomas" name="diplomas">
            <option value="without">Sans</option>
            <option value="bac">Bac</option>
            <option value="bac2">Bac +2</option>
            <option value="bac3">Bac +3</option>
            <option value="superior">Diplôme de niveau supérieur </option>
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
    </div>
    <div class="w-100 p-1"></div>
    <div id="personnalStories">
        <h2 class="partsTitleSize">Partie 3/3</h2>
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
    </div>
    <div class="w-100 p-1"></div>
    <input type="submit" value="Let's a-go !"/>
</form>
<?php
include '../footer.php';
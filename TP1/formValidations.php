<?php
// Default value for the form status, it will not be sent until it's changed to true (a bit further).
$confirmFormSubmission = false;
//
// Regex list using PCRE, instead of POSIX (chosen for the official correction), to increase the treatment speed.
// Verifying that this is a link to a codecademy profile et not a random link to some other page on the website.
$regexCodecademy = "#^[https://www\.codecademy\.com/profiles/]#";
// Phone number must begin by a 0 followed by a number from 1 to 8, it has to be followed by four groups of 2 numbers that can be preceeded by a selection of special characters.
$regexPhone = "#^0[1-8]([-. ]?[0-9]{2}){4}$#";
// The mail address begins with at least one of the defined characters, is followed by an @ and at least 2 letters, a point and end with 2 to 4 letters.
$regexMail = "#^[a-z0-9.-_]+@[a-z0-9.-_]{2,}\.[a-z]{2,4}$#";
// Begins with an uppercase followed by an undefined number of 
$regexNames = "#^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ-' ]{1,}#";
$regexRegulartext = "#^[A-Z]{1}[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ\-,\.'() ]{1,}#";
$regexCodecademyBadges = "#^[0-9]{1,}#";
// French zip codes are composed of five numbers, even for Corsica (it's the INSEE codes that use 2A and 2B), thanks Wikipédia for the clarification.
$regexZipCode = "#^[0-9]{5}$#";
// Can contain as many characters as needed, but only accept a little selection of ponctuation.
$regexAddress = "#^[a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ0-9\-, ]+#";
// Begin with seven numbers ranged from 0 to 9 and must finish with a letter.
$regexPoleEmploiID = "#^[0-9]{7}[A-Za-z]$#";
// Default values for all future stocked informations provided by the form.
$lastName = $firstName = $birthDate = $country = $nationality = $address = $complementaryAddress = $zipCode = $city = $email = $phone = $diplomas = $poleEmploiID = $badgeNb = $codecademyLink = $ifHero = $personnalHack = $previousDevelopperExperience = '';

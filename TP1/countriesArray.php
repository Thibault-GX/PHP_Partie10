<?php
$countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla",
        "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda",
        "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
        "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada",
        "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island",
        "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the",
        "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic",
        "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
        "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji",
        "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories",
        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe",
        "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands",
        "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia",
        "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan",
        "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait",
        "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia",
        "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of",
        "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania",
        "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco",
        "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands",
        "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue",
        "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama",
        "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico",
        "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
        "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia",
        "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia",
        "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands",
        "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands",
        "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan",
        "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago",
        "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine",
        "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands",
        "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)",
        "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];

$nationalities = [1 =>'Afghane', 'Albanaise', 'Algerienne', 'Allemande', 'Americaine', 'Andorrane', 'Angolaise',
        'Antiguaise et barbudienne', 'Argentine', 'Armenienne', 'Australienne', 'Autrichienne', 'Azerbaïdjanaise',
        'Bahamienne', 'Bahreinienne', 'Bangladaise', 'Barbadienne', 'Belge', 'Belizienne', 'Beninoise',
        'Bhoutanaise', 'Bielorusse', 'Birmane', 'Bissau-Guinéenne', 'Bolivienne', 'Bosnienne', 'Botswanaise',
        'Bresilienne', 'Britannique', 'Bruneienne', 'Bulgare', 'Burkinabe', 'Burundaise', 'Cambodgienne',
        'Camerounaise', 'Canadienne', 'Cap-verdienne', 'Centrafricaine', 'Chilienne', 'Chinoise', 'Chypriote',
        'Colombienne', 'Comorienne', 'Congolaise', 'Costaricaine', 'Croate', 'Cubaine', 'Danoise', 'Djiboutienne',
        'Dominicaine', 'Dominiquaise', 'Egyptienne', 'Emirienne', 'Equato-guineenne', 'Equatorienne',
        'Erythreenne', 'Espagnole', 'Est-timoraise', 'Estonienne', 'Ethiopienne', 'Fidjienne', 'Finlandaise',
        'Française', 'Gabonaise', 'Gambienne', 'Georgienne', 'Ghaneenne', 'Grenadienne', 'Guatemalteque',
        'Guineenne', 'Guyanienne', 'Haïtienne', 'Hellenique', 'Hondurienne', 'Hongroise', 'Indienne', 'Indonesienne',
        'Irakienne', 'Irlandaise', 'Islandaise', 'Israélienne', 'Italienne', 'Ivoirienne', 'Jamaïcaine', 'Japonaise',
        'Jordanienne', 'Kazakhstanaise', 'Kenyane', 'Kirghize', 'Kiribatienne', 'Kittitienne-et-nevicienne',
        'Kossovienne', 'Koweitienne', 'Laotienne', 'Lesothane', 'Lettone', 'Libanaise', 'Liberienne', 'Libyenne',
        'Liechtensteinoise', 'Lituanienne', 'Luxembourgeoise', 'Macedonienne', 'Malaisienne', 'Malawienne',
        'Maldivienne', 'Malgache', 'Malienne', 'Maltaise', 'Marocaine', 'Marshallaise', 'Mauricienne', 'Mauritanienne',
        'Mexicaine', 'Micronesienne', 'Moldave', 'Monegasque', 'Mongole', 'Montenegrine', 'Mozambicaine',
        'Namibienne', 'Nauruane', 'Neerlandaise', 'Neo-zelandaise', 'Nepalaise', 'Nicaraguayenne', 'Nigeriane',
        'Nigerienne', 'Nord-coréenne', 'Norvegienne', 'Omanaise', 'Ougandaise', 'Ouzbeke', 'Pakistanaise',
        'Palau', 'Palestinienne', 'Panameenne', 'Papouane-neoguineenne', 'Paraguayenne', 'Peruvienne',
        'Philippine', 'Polonaise', 'Portoricaine', 'Portugaise', 'Qatarienne', 'Roumaine', 'Russe', 'Rwandaise',
        'Saint-lucienne', 'Saint-marinaise', 'Saint-vincentaise-et-grenadine', 'Salomonaise', 'Salvadorienne',
        'Samoane', 'Santomeenne', 'Saoudienne', 'Senegalaise', 'Serbe', 'Seychelloise', 'Sierra-leonaise',
        'Singapourienne', 'Slovaque', 'Slovene', 'Somalienne', 'Soudanaise', 'Sri-lankaise', 'Sud-africaine',
        'Sud-coréenne', 'Suedoise', 'Suisse', 'Surinamaise', 'Swazie', 'Syrienne', 'Tadjike', 'Taiwanaise',
        'Tanzanienne', 'Tchadienne', 'Tcheque', 'Thaïlandaise', 'Togolaise', 'Tonguienne', 'Trinidadienne',
        'Tunisienne', 'Turkmene', 'Turque', 'Tuvaluane', 'Ukrainienne', 'Uruguayenne', 'Vanuatuane', 'Venezuelienne',
        'Vietnamienne', 'Yemenite', 'Zambienne', 'Zimbabweenne'];

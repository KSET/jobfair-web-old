<?php

$TRANSLATION_TABLE = array(
    'Log in' => 'Prijava',
    'Username' => 'Korisničko ime',
    'Password' => 'Lozinka',
    'Submit' => 'Unos',
    'Choose' => 'Odaberi',
    'Wrong username and/or password!' => 'Krivo korisničko ime i/ili lozinka!',
    'Error! Go back and try again.' => 'Greška! Idite nazad i pokušajte ponovo.',
    'Data successfully submitted!' => 'Podaci su uspješno uneseni!',
    'Data successfully deleted!' => 'Podaci su uspješno izbrisani!',
    'Are You sure?' => 'Jeste li sigurni?',
    'You didn\'t fill all requested fields!' => 'Niste popunili sva tražena polja!',
    'First name' => 'Ime',
    'Middle name' => 'Drugo ime',
    'Last name' => 'Prezime',
    'Gender' => 'Spol',
    'Male' => 'Muško',
    'Female' => 'Žensko',
    'Section' => 'Sektor',
    'Type' => 'Tip',
);

function __($txt)
{
    global $TRANSLATION_TABLE;
    if (isset($TRANSLATION_TABLE[$txt])) return $TRANSLATION_TABLE[$txt];
    return $txt;
}

?>

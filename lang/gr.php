
<?php
$lang = [
    'SEARCH'  				=> 'Αναζήτηση torrent',
    'SEARCHBTN'  			=> 'Αναζήτηση τώρα',
    'AGREETOS'              => 'Κάνοντας αναζήτηση σε αυτόν τον ιστότοπο συμφωνείτε με τους όρους χρήσης <a href="">terms-of-service</a>.',
    'MOVIES'  				=> 'Ταινίες',
    'SHOWS'  				=> 'Σειρές',
    'GAMES'  				=> 'Παιχνίδια',
    'ADULT'  				=> 'Ενήλικες',
    'TYPE'  				=> 'Κατηγορίες',
    'NAME'  				=> 'Όνομα',
    'SEED'  				=> 'Seed',
    'LEECH'  				=> 'Leech',
    'SEARCHFROM'  			=> 'Αναζητήστε σε πάνω από <span class="torrent-num">'. $DEFINE['torrents'] .' Torrent</span> &amp; <span class="torrent-">'. $DEFINE['hosts'] .' Hosts</span> Παγκοσμίως.',
    'SEARCHRESULTS'			=> 'Εμφανίζονται αποτελέσματα για',
	'ALLTORRENTS'			=> 'All Torrents',
	'ALLCAT'				=> 'All'
];

function lang($val) {
    global $lang;
    return array_key_exists($val, $lang) ? $lang[$val] : 'undefined';
}
<?php
$lang = [
    'SEARCH'  				=> 'S&oslash;k etter Torrent Navn',
    'SEARCHBTN'  			=> 'S&oslash;k n&aring;',
    'AGREETOS'				=> 'N&aring;r du s&oslash;ker denne nettsiden, godtar du v&aring;re <a href="">brukerbetingelser</a>.',
    'MOVIES'  				=> 'Filmer',
    'SHOWS'  				=> 'Serier',
    'GAMES'  				=> 'Spill',
    'ADULT'  				=> 'Voksen',
    'TYPE'  				=> 'Typer',
    'NAME'  				=> 'Navn',
    'SEED'  				=> 'Seedere',
    'LEECH'  				=> 'Leechere',
    'SEARCHFROM'  			=> 'S&oslash;k blant mer enn <span class="torrent-num">'. $DEFINE['torrents'] .' Torrent-filer</span> &amp; <span class="torrent-">'. $DEFINE['hosts'] .' Verter</span> over hele verden.',
	'SEARCHRESULTS'			=> 'S&oslash;keresultater for',
	'ALLTORRENTS'			=> 'Alle Torrent-filer',
	'ALLCAT'				=> 'Alle kategorier'
];

function lang($val) {
    global $lang;
    return array_key_exists($val, $lang) ? $lang[$val] : 'undefined';
}
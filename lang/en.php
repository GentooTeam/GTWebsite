<?php
$lang = [
    'SEARCH'  				=> 'Search by Torrent Name',
    'SEARCHBTN'  			=> 'Search Now',
    'AGREETOS'				=> 'By searching this website you agree to our <a href="">terms-of-service</a>.',
    'MOVIES'  				=> 'Movies',
    'SHOWS'  				=> 'Shows',
    'GAMES'  				=> 'Games',
    'ADULT'  				=> 'Adult',
    'TYPE'  				=> 'Types',
    'NAME'  				=> 'Name',
    'SEED'  				=> 'Seed',
    'LEECH'  				=> 'Leech',
    'SEARCHFROM'  			=> 'Search from more than <span class="torrent-num">'. $DEFINE['torrents'] .' Torrents</span> &amp; <span class="torrent-">'. $DEFINE['hosts'] .' Hosts</span> Worldwide.',
	'SEARCHRESULTS'			=> 'Showing results for',
	'ALLTORRENTS'			=> 'All Torrents',
	'ALLCAT'				=> 'All'
];

function lang($val) {
    global $lang;
    return array_key_exists($val, $lang) ? $lang[$val] : 'undefined';
}
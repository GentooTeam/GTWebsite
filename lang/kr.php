<?php
$lang = [
    'SEARCH'  				=> '토렌트 제목 검색하기',
    'SEARCHBTN'  			=> '검색',
    'AGREETOS'				=> '이 웹 사이트를 검색하는 당신은 우리의 <a href="">이용약관을</a> 동의합니다.',
    'SEARCHBTN'  			=> '검색',
    'MOVIES'  				=> '영화',
    'SHOWS'  				=> 'TV',
    'GAMES'  				=> '게임',
    'ADULT'  				=> '성인',
    'TYPE'  				=> '유형',
    'NAME'  				=> '제목',
    'SEED'  				=> 'Seed',
    'LEECH'  				=> 'Leech',
    'SEARCHFROM'  			=> '<span class="torrent-num">'. $DEFINE['torrents'] .' 토렌트</span> &amp; <span class="torrent-">'. $DEFINE['hosts'] .' 호스트에게</span> 검색하기.',
    'SEARCHRESULTS'			=> 'Showing results for',
	'ALLTORRENTS'			=> '모든 토런트 파일',
	'ALLCAT'		    	=> '모든'

];

function lang($val) {
    global $lang;
    return array_key_exists($val, $lang) ? $lang[$val] : 'undefined';
}
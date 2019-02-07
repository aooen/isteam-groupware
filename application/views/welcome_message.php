<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ISTeam</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/spoqa-han-sans@2.1.2/css/SpoqaHanSans-kr.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<style>
	html, body { font-family: 'Spoqa Han Sans'; }
	.container { overflow: hidden; max-width: 960px; }
	.site-header { background-color: rgba(0, 0, 0, .8); }
	.site-header a { color: #bbb; }
	.site-header a:hover { color: #fff; text-decoration: none; }
	.header-container { max-width: 500px; }
	.bg-banner { background-color: #161a33; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%232a2944' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%23515055'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E"); /* background by SVGBackgrounds.com */ }
	#activity, #support, #member { margin: 10px auto; border: 1px solid #ccc; background-color: #f7f7f7; }
	</style>
</head>
<body>
	<section class="bg-banner mb-n5 p-5 text-center text-white">
		<div class="col-md-6 mb-5 mx-auto">
			<h3 class="mb-1">SSU Computer & Software Project Club</h2>
			<h1 class="mb-5"><img class="mr-1" src="./static/img/logo.svg" alt="ISTeam" style="height: 0.9em;"> ISTeam</h1>
			<a class="btn btn-outline-light" href="./login">부원 그룹웨어 로그인</a>
		</div>
	</section>
	<nav class="site-header sticky-top py-1">
		<div class="container header-container d-flex flex-column flex-md-row justify-content-between">
			<a class="py-2 d-none d-md-inline-block" href="#activity">활동</a>
			<a class="py-2 d-none d-md-inline-block" href="#support">지원</a>
			<a class="py-2 d-none d-md-inline-block" href="#member">부원</a>
		</div>
	</nav>
	<div id="activity" class="container p-3">
		<h3 class="mb-1 text-center">스터디 &amp; 세미나</h3>
		<h5>2018년에 진행된 스터디 목록</h5>
		<ul class="list-group">
			<li class="list-group-item">
				<h5>안드로이드 스터디</h5>
				<a href="https://docs.google.com/spreadsheets/d/1oLwZ8fFpGBB1HoBLwH6lSR8AUrSyAHPAtuD_XjijRdY/">하계 안드로이드 스터디</a> - 안드로이드의 기초를 배웁니다.<br>
				<a href="https://docs.google.com/spreadsheets/d/1k-sPJDe4UCuXoK35YvVHDTxFSIK-PzVqiYxls_Bz8uc/">추계 안드로이드 스터디</a> - 안드로이드 고급 내용을 배웁니다.
			</li>
			<li class="list-group-item">
				<h5>웹 스터디</h5>
				프론트엔드 및 Node.js 스터디로, 웹 사이트를 만드는 방법에 대해 공부했습니다.
			</li>
			<li class="list-group-item">
				<h5>머신러닝 스터디</h5>
				머신러닝에 대한 기본적인 내용을 공부했습니다.
			</li>
		</ul>
	</div>
	<div id="support" class="container p-3">
		<div class="overflow-hidden p-3">
			<img class="rounded-circle float-left mr-4" src="./static/img/d2.png" alt="D2 Campus Partner" width="100">
			<h3>Naver D2 Campus</h3>
			Naver D2 Campus에서 서버, 행사 등 여러가지 지원을 받는 Partner 동아리로 선정되었습니다.
		</div>
		<div class="overflow-hidden p-3">
			<div class="overflow-hidden rounded-circle float-left mr-4 pt-3 bg-white" style="width: 100px; height: 100px;">
				<img src="./static/img/ssu.jpg" alt="SSU" style="width: 100px;">
			</div>
			<h3>숭실대학교 공식 소모임</h3>
			숭실대학교 공식 컴퓨터학부, 소프트웨어학부 소속 소모임으로써 강의실 지원을 받습니다.
		</div>
	</div>
	<div id="member" class="container p-3 text-center">
		<h3 class="mb-1">부원으로 지원하기</h3>
		숭실대학교 컴퓨터학부·소프트웨어학부 소속 학부생만 지원이 가능합니다.<br>
		<button class="mt-3 btn btn-primary" disabled tooltip="">부원 신청하기</button><br>
		<small>현재는 모집 기간이 아닙니다. 모집 시 홍보 예정입니다.</small>
	</div>
	<footer class="my-3 text-center small">
		&copy; ISTeam, Soongsil University, Seoul
	</footer>
</body>
</html>
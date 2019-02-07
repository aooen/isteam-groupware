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
	<link rel="stylesheet" href="<?=base_url('static/css/main.css')?>">
</head>
<body>
	<section class="mb-n5 p-5 bg-banner text-center text-white">
		<div class="col-md-6 mb-5 mx-auto">
			<h3 class="mb-1">SSU Computer & Software Project Club</h2>
			<h1 class="mb-5"><img class="mr-1" src="<?=base_url('static/img/logo.svg')?>" alt="ISTeam" style="height: 0.9em;"> ISTeam</h1>
			<a class="btn btn-outline-light" href="<?=base_url('login')?>">부원 그룹웨어 로그인</a>
		</div>
	</section>
	<header class="sticky-top py-1">
		<nav class="container d-flex flex-row justify-content-between">
			<a class="py-2" href="#activity">활동</a>
			<a class="py-2" href="#support">지원</a>
			<a class="py-2" href="#member">부원</a>
		</nav>
	</header>
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
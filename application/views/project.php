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
	<header class="fixed-top py-1 bg-banner">
		<nav class="container d-flex flex-row justify-content-between">
			<a class="py-2" href="<?=base_url('project')?>">프로젝트</a>
			<a class="py-2" href="<?=base_url('member')?>">부원명단</a>
			<a class="py-2" href="<?=base_url('account')?>">회계내역</a>
			<span class="py-1"><a class="btn btn-sm btn-outline-danger" href="<?=base_url('login/out')?>">로그아웃</a></span>
		</nav>
	</header>
	<section class="container mt-5">
		프로젝트
	</section>
	<footer class="my-3 text-center small">
		&copy; ISTeam, Soongsil University, Seoul
	</footer>
</body>
</html>
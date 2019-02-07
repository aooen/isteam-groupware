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
		html, body { height: 100%; background: url('<?=base_url('static/img/background.jpg')?>') center / cover; font-family: 'Spoqa Han Sans'; }
		#login { position: relative; top: 50%; width: 300px; margin: 0 auto; padding: 25px; background-color: rgba(40, 44, 52, 0.95); color: white; transform: translateY(-50%); }
		#register-input input { border-radius: 0; }
		#register-input input:last-of-type { border-radius: 0 0 .2rem .2rem; }
	</style>
</head>
<body>
	<form id="login" class="text-center" action="<?=base_url('login')?>" method="post">
		<input type="hidden" name="type" value="login">
		<h2 class="pb-2">ISTeam 그룹웨어</h2>
		<div class="row px-3">
			<div class="col-md-8 p-0">
				<input class="form-control form-control-sm" type="text" name="id" maxlength="20" placeholder="아이디" style="border-radius: .2rem 0 0 0;">
				<input class="form-control form-control-sm border-top-0" type="password" name="password" placeholder="비밀번호" style="border-radius: 0 0 0 .2rem;">
			</div>
			<div class="col-md-4 p-0">
				<button type="submit" class="btn btn-primary w-100 h-100" style="border-radius: 0 .2rem .2rem 0;">로그인</button>
			</div>
			<div id="register-input" class="d-none col-md-12 p-0">
				<input class="form-control form-control-sm border-top-0" type="password" name="password_confirm" placeholder="비밀번호 확인">
				<input class="form-control form-control-sm border-top-0" type="text" name="name" placeholder="이름">
				<input class="form-control form-control-sm border-top-0" type="text" name="number" placeholder="학번">
				<input class="form-control form-control-sm border-top-0" type="text" name="email" placeholder="이메일">
			</div>
		</div>
		<a id="register" class="text-white" href="#">회원가입</a>
	</form>
	<script>
		$('#register').click(function () {
			$('#register-input').show();
			$('input[name=type]').val('register');
			$('input[name=password]').css('border-radius', '0');
			$('button[type=submit]').css('border-radius', '0 .2rem 0 0').text('가입');
			$(this).hide();
		})
	</script>
</body>
</html>
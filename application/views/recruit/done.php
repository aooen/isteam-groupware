<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ko">
	<head>
		<title>ISTeam Recruit</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="<?=base_url('static/img/favicon.ico')?>">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/vendor/animate/animate.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/vendor/css-hamburgers/hamburgers.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/vendor/animsition/css/animsition.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/vendor/select2/select2.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/vendor/daterangepicker/daterangepicker.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/css/util.css')?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url('static/recruit/css/main.css')?>">
	</head>
	<body>
		<div class="container-contact100">
			<div class="wrap-contact100">
				<form class="contact100-form validate-form"><span class="contact100-form-title">지원이 완료되었습니다.</span>
					<div class="wrap-input100 validate-input"><span class="label-input100"><br>숭실대학교 컴퓨터학부 소모임 ISTeam에 지원해주셔서 감사합니다.<br>빠른 시일내로 결과를 알려드리겠습니다.</span></div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div><a class="contact100-form-btn" href="/"><span>확인<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span></a></div>
					</div>
				</form>
			</div>
		</div>
		<div id="dropDownSelect1"></div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
		<script src="<?=base_url('static/recruit/vendor/animsition/js/animsition.min.js')?>"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>
		<script src="<?=base_url('static/recruit/vendor/select2/select2.min.js')?>"></script>
		<script>
			$(".selection-2").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect1')
			});
		</script>
		<script src="<?=base_url('static/recruit/vendor/daterangepicker/moment.min.js')?>"></script>
		<script src="<?=base_url('static/recruit/vendor/daterangepicker/daterangepicker.js')?>"></script>
		<script src="<?=base_url('static/recruit/vendor/countdowntime/countdowntime.js')?>"></script>
		<script src="<?=base_url('static/recruit/javascripts/main.js')?>"></script>
		<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'UA-23581568-13');
		</script>
	</body>
</html>
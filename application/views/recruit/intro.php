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
		<?php if (date("Ymd") == "20190317") { ?>
			<div class="w-100">
				<div class="alert alert-danger" role="alert" style="max-width: 500px; margin: 0 auto 10px; text-align: center;">
					<h5>마감 시간을 엄수해주세요!</h5><br>
					오늘까지만 지원 가능합니다.<br>
					추가 제출은 절대 불가능합니다!
				</div>
			</div>
<?php } ?>
			<div class="wrap-contact100">
				<form class="contact100-form validate-form"><img src="<?=base_url('static/recruit/images/astrab.png')?>" width="100%" style="margin-left: auto; margin-right: auto; display: block;">
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div><a class="contact100-form-btn" href="<?=base_url('recruit/resume')?>"><span>지원하기<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span></a></div>
					</div>
				</form>
			</div>
		</div>
		<div id="dropDownSelect1"></div>
		<script src="<?=base_url('static/recruit/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
		<script src="<?=base_url('static/recruit/vendor/animsition/js/animsition.min.js')?>"></script>
		<script src="<?=base_url('static/recruit/vendor/bootstrap/js/popper.js')?>"></script>
		<script src="<?=base_url('static/recruit/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
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
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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
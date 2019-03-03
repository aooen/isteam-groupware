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
				<form class="contact100-form validate-form" method="post" action="<?=base_url('recruit')?>">
					<span class="contact100-form-title">ISTeam</span>
					<textarea class="input100" disabled>　개인정보 취급방침
2019년 3월 4일 시행, 2019년 3월 4일 수정
1. ISTeam은 부원 모집을 위한 목적으로 개인정보를 수집하고 있습니다.
2. 수집하는 정보 : 이름, 이메일, 소속 학부, 입학년도, GitHub 아이디, 자기소개
3. 수집 사유 : 동아리 부원 모집 기초 자료, 결과 안내
4. 제 3자에게 개인정보를 제공하지 않습니다.
5. 다음과 같은 경우에 개인정보를 파기합니다.
- ISTeam 모집 탈락시 결과 발표로부터 최대 1달동안 보관 후 파기합니다.
- ISTeam 회원으로서 선발이 되었을 경우 어느 때든 탈퇴 의사를 표시할 수 있으며, 탈퇴 후 최대 1년동안 보관 후 파기합니다.
6. 개인정보 책임자는 ISTeam 부회장으로 합니다.
- 성명 : 김학연
- 이메일 : khy@aooen.com</textarea>
					<label style="margin-top: 10px;"><input type="checkbox" name="agree"> 개인정보 취급방침에 동의합니다.</label>
					<hr>
					<div class="wrap-input100 validate-input" data-validate="이름이 입력되지 않았습니다">
						<span class="label-input100">이름</span>
						<input class="input100" type="text" name="name" placeholder="이름을 입력해주세요">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="바른형식의 이메일이 입력되지 않았습니다.">
						<span class="label-input100">이메일</span>
						<input class="input100" type="text" name="email" placeholder="이메일을 입력해 주세요">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 input100-select">
					<span class="label-input100">소속학부</span>
						<div>
							<select class="selection-2" name="department">
								<option>컴퓨터학부</option>
								<option>소프트웨어학부</option>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 input100-select">
					<span class="label-input100">입학년도</span>
						<div>
							<select class="selection-2" name="grade">
								<option>2019년</option>
								<option>2018년</option>
								<option>2017년</option>
								<option>2016년</option>
								<option>2015년</option>
								<option>2014년</option>
								<option>2013년</option>
								<option>2012년</option>
								<option>2011년</option>
								<option>2011년 이전</option>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100">
						<span class="label-input100">GitHub 아이디 (선택)</span>
						<input class="input100" type="text" name="github" placeholder="GitHub 이외 저장소 주소도 가능합니다">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="내용이 입력되지 않았습니다">
						<span class="label-input100">프로그래밍 언어를 사용해 본 경험이 있으신가요?</span>
						<textarea class="input100" name="message1" placeholder="내용을 입력해 주세요"></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="내용이 입력되지 않았습니다">
						<span class="label-input100">프로젝트 경험이 있으신가요? 있다면 인상 깊은 프로젝트를 하나 설명해주시고, 없다면 진행하고 싶으신 프로젝트를 말씀해주세요.</span>
						<textarea class="input100" name="message2" placeholder="내용을 입력해 주세요"></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="내용이 입력되지 않았습니다">
						<span class="label-input100">컴퓨터에 흥미가 생긴 시기와 그 이유가 어떻게 되시나요?</span>
						<textarea class="input100" name="message3" placeholder="내용을 입력해 주세요"></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="내용이 입력되지 않았습니다">
						<span class="label-input100">ISTeam에 지원하신 동기와 합격 후 포부가 어떻게 되시나요?</span>
						<textarea class="input100" name="message4" placeholder="내용을 입력해 주세요"></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn"><span>지원<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span></button>
						</div>
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
	</body>
</html>
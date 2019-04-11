<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="container mt-5 p-2">
	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<h5 class="card-header">비밀번호 변경</h5>
				<div class="card-body">
					<form method="post" action="<?=base_url('login/mypage')?>">
						<input class="form-control" type="password" name="password" placeholder="새 비밀번호"><br>
						<input class="form-control" type="password" name="password_confirm" placeholder="새 비밀번호 확인"><br>
						<button class="form-control btn btn-primary" type="submit">변경</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					회원 탈퇴 문의<br>
					<a href="mailto:khy@aooen.com">khy@aooen.com</a>
				</div>
			</div>
		</div>
	</div>
</section>
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
		<style>
			thead { background: #d8b635; font-size: 0.8em; }
			td, th { word-wrap: break-word; }
			.row-2 { border-bottom: 10px solid #ccc; }
		</style>
	</head>
	<body>
		<table class="table">
			<thead>
				<tr>
					<th scope="col" style="width: 200px;">번호 (지원시간)</th>
					<th scope="col">이름</th>
					<th scope="col">학부</th>
					<th scope="col">입학년도</th>
					<th scope="col">GitHub 아이디 (저장소)</th>
				</tr>
				<tr>
					<th scope="col">이메일 (연락처)</th>
					<th scope="col">프로그래밍 언어를 사용해 본 경험이 있으신가요?</th>
					<th scope="col">프로젝트 경험이 있으신가요? 있다면 인상 깊은 프로젝트를 하나 설명해주시고, 없다면 진행하고 싶으신 프로젝트를 말씀해주세요.</th>
					<th scope="col">컴퓨터에 흥미가 생긴 시기와 그 이유가 어떻게 되시나요?</th>
					<th scope="col">ISTeam에 지원하신 동기와 합격 후 포부가 어떻게 되시나요?</th>
				</tr>
			</thead>
			<tbody>
<?php foreach ($data as $r) { ?>
			<tr><td><?="{$r->no} ({$r->date})"?></td><td><?=$r->name?></td><td><?=$r->department?></td><td><?=$r->grade?></td><td><?=$r->github?></td>
			</tr>
			<tr class="row-2"><td><?="{$r->email} ({$r->phone})"?></td><td><?=$r->message1?></td><td><?=$r->message2?></td><td><?=$r->message3?></td><td><?=$r->message4?></td></tr>
<?php } ?>
			</tbody>
		</table>
	</body>
</html>
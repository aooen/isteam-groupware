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
				<tr class="row-2">
					<th scope="col">이메일 (연락처)</th>
					<th scope="col">언어 경험</th>
					<th scope="col">프로젝트 경험 & 독창성</th>
					<th scope="col">전공 선택 계기</th>
					<th scope="col">지원 동기 및 포부</th>
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="container mt-5 p-2">
	<table class="table table-bordered mb-1">
		<thead>
			<tr><th>#</th><th>학번</th><th>이름</th><th>이메일</th></tr>
		</thead>
		<tbody>
<?php $i = 1; foreach ($list as $row) { ?>
			<tr><td><?=$i++?></td><td><?=$row->number?></td><td><?=$row->name?></td><td><a href="mailto:<?=$row->email?>"><?=$row->email?></a></td></tr>
<?php } ?>
		</tbody>
	</table>
	<small>개인정보취급방침에 동의하고 그룹웨어에 가입한 사람의 정보만 제공됩니다. 재학생만 표시됩니다.</small>
</section>
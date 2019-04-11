<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="container mt-5 p-2">
	<div class="mb-2">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-project">프로젝트 추가</button>
		<div class="ml-4 btn-group" role="group">
<?php for ($i = max($page - 5, 1); $i < $page; $i++) { ?>
			<a class="btn btn-secondary" href="<?=base_url('project/page/'.$i)?>"><?=$i?></a>
<?php } ?>
			<a class="btn btn-outline-secondary disabled"><?=$page?></a>
<?php for ($i = $page + 1; $i <= min($page + 5, ceil($count / 10)); $i++) { ?>
			<a class="btn btn-secondary" href="<?=base_url('project/page/'.$i)?>"><?=$i?></a>
<?php } ?>
		</div>
	</div>
	<div style="border-top: 1px solid #ccc;">
<?php foreach ($list as $project) { ?>
		<div class="px-3 py-2 border-1 border-top-0">
			<h4><a href="<?=base_url('project/view/'.$project->no)?>"><?=htmlspecialchars($project->title)?></a>
	<?php if ($project->status === 'recruit') { ?>
			<span class="badge badge-success">모집</span>
	<?php } else if ($project->status === 'close') { ?>
			<span class="badge badge-secondary">폐쇄</span>
	<?php } ?>
		</h4>
	<?php 
	$summary = htmlspecialchars($project->summary);
	$summary = mb_strlen($summary) <= 50 ? $summary : mb_substr($summary, 0, 100).'...';
	echo $summary;
	?>
		</div>
<?php } ?>
	</div>
</section>
<div class="modal fade" id="add-project" tabindex="-1" role="dialog" aria-labelledby="add-project-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add-project-label">프로젝트 추가</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?=base_url('project')?>" method="post">
				<div class="modal-body">
					<input class="form-control w-100" type="text" name="title" placeholder="제목" maxlength="100">
					<textarea class="form-control w-100" name="summary" rows="10" placeholder="요약 (1000자 이내)" maxlength="1000"></textarea>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">추가</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>
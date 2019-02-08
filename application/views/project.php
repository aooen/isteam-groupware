<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="container mt-5 p-2">
	<article class="px-3 py-2">
		<h3 class="pb-2" style="border-bottom: 1px solid #d5d5d5;"><?=htmlspecialchars($project->title)?>
<?php if ($project->status === 'close') { ?>
		<span class="badge badge-secondary">폐쇄</span>
<?php } ?>
<?php if ($permission === 'editable' || $permission === 'openable') { ?>
		<button type="button" class="float-right btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#edit-project">&#x270E;</button>
<?php } ?></h3>
		<?=htmlspecialchars($project->summary)?>
	</article>
<?php if ($images) { ?>
	<div class="scrollbar px-3 py-2" style="overflow-x: scroll; white-space: nowrap;">
	<?php foreach ($images as $img) { ?>
		<a href="<?=$img->data?>" target="_blank"><img class="mr-2" src="<?=$img->data?>" style="height: 100px;" title="<?=$img->name?>이 업로드함 (<?=$img->create_date?>)"></a>
	<?php } ?>
	</div>
<?php } ?>
<?php foreach ($urls as $url) { ?>
	<article class="px-3 py-2" title="<?=$url->create_date?>">
		<?=$url->name?> &#x1f517; <a href="<?=$url->data?>" target="_blank"><?=$url->data?></a>
	</article>
<?php } ?>
<?php foreach ($texts as $text) { ?>
	<article class="px-3 py-2" title="<?=$url->create_date?>">
		<strong class="mr-3"><?=$text->name?></strong>
		<?=$text->data?>
	</article>
<?php } ?>
<?php if ($permission === 'editable' || $permission === 'attachable') { ?>
	<article class="px-3 py-2">
		<form class="row" action="<?=base_url('project/attach/'.$project->no)?>" method="post">
			<div class="col-10">
				<textarea class="form-control w-100" name="data" rows="5"></textarea>
			</div>
			<div class="col-2 pl-0">
				<select class="form-control mb-1" name="type">
					<option value="text">텍스트</option>
					<option value="image">이미지</option>
					<option value="url">URL</option>
				</select>
				<button class="form-control h-50" type="submit">입력</button>
			</div>
		</form>
	</article>
<?php } ?>
</section>
<?php if ($permission === 'editable' || $permission === 'openable') { ?>
<div class="modal fade" id="edit-project" tabindex="-1" role="dialog" aria-labelledby="edit-project-label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="edit-project-label">프로젝트 수정</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?=base_url('project')?>" method="post">
				<input type="hidden" name="project" value="<?=$project->no?>">
<?php if ($project->status === 'open') { ?>
				<div class="modal-body">
					<input class="form-control w-100" type="text" name="title" placeholder="제목" maxlength="100" value="<?=$project->title?>">
					<textarea class="form-control w-100" name="summary" rows="10" placeholder="요약 (1000자 이내)" maxlength="1000"><?=$project->summary?></textarea>
				</div>
<?php } ?>
				<div class="modal-footer">
					<button type="submit" name="type" value="remove" class="btn btn-danger" onsubmit="return confirm('복구가 불가능합니다! 정말 삭제하시겠습니까?');">삭제</button>
<?php if ($project->status === 'close') { ?>
					<button type="submit" name="type" value="close" class="btn btn-success">폐쇄취소</button>
<?php } else { ?>
					<button type="submit" name="type" value="close" class="btn btn-warning">폐쇄</button>
					<button type="submit" name="type" value="edit" class="btn btn-primary">수정</button>
<?php } ?>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?></h3>
<style>
	.scrollbar::-webkit-scrollbar-trace { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); border-radius: 6px; background-color: #F5F5F5; }
	.scrollbar::-webkit-scrollbar { height: 6px; background-color: #F5F5F5; }
	.scrollbar::-webkit-scrollbar-thumb { border-radius: 6px; -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3); background-color: #555; }
</style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>
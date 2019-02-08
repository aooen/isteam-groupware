<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header class="fixed-top py-1 bg-banner">
	<nav class="container d-flex flex-row justify-content-between">
		<a class="py-2" href="<?=base_url('project')?>">프로젝트</a>
		<a class="py-2" href="<?=base_url('member')?>">부원명단</a>
		<a class="py-2" href="<?=base_url('account')?>">회계내역</a>
		<span class="py-1"><a class="btn btn-sm btn-outline-danger" href="<?=base_url('login/out')?>">로그아웃</a></span>
	</nav>
</header>
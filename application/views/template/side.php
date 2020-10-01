<!-- Sidebar  -->
<nav id="sidebar">
	<div class="sidebar-header">
		<h3>GR</h3>
		<strong>GR</strong>
	</div>

	<ul class="list-unstyled components">
		<li class="<?= $materiName == 'webScrapping'  ?'active' :'' ?>">
			<a href="<?= base_url('home/webScrappingView'); ?>">
			<img src="<?= base_url('asset/img/webpack.png') ?>" style="width:10%">
				Web Scrapping
			</a>
		</li>
		<li class="<?= $materiName == 'Laravel'  ?'active' :'' ?>">
			<a href="<?= base_url('home/laravelView'); ?>">
				<img src="<?= base_url('asset/img/laravel.png') ?>" style="width:10%">
				Laravel
			</a>
		</li>
		<li class="<?= $materiName == 'codeIgniter'  ?'active' :'' ?>">
			<a href="<?= base_url('home/codeIgniterView'); ?>">
				<img src="<?= base_url('asset/img/codeigniter.png') ?>" style="width:10%">
				Code Igniter
			</a>
		</li>
		<li class="<?= $materiName == 'Angular'  ?'active' :'' ?>">
			<a href="<?= base_url('home/angularView'); ?>">
				<img src="<?= base_url('asset/img/laravel.png') ?>" style="width:10%">
				Angular
			</a>
		</li>
		<li class="<?= $materiName == 'React'  ?'active' :'' ?>">
			<a href="<?= base_url('home/reactView'); ?>">
				<img src="<?= base_url('asset/img/react.png') ?>" style="width:10%">
				React
			</a>
		</li>
		<li class="<?= $materiName == 'Golang'  ?'active' :'' ?>">
			<a href="<?= base_url('home/golangView'); ?>">
				<img src="<?= base_url('asset/img/react.png') ?>" style="width:10%">
				Golang
			</a>
		</li>
	</ul>
</nav>

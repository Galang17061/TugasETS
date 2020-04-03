<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">

		<button type="button" id="sidebarCollapse" class="btn btn-info">
			<i class="fas fa-align-left"></i>
		</button>
		<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<i class="fas fa-align-justify"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav ml-auto" id="pagination">
				<li class="nav-item active" id="materi">
					<a class="nav-link" href="#" onclick="pagination.move_pagination('<?= $materiName ?>','latarBelakang')">Latar Belakang</a>
				</li>
				<li class="nav-item" id="deskripsi">
					<a class="nav-link" href="#" onclick="pagination.move_pagination('<?= $materiName ?>','deskripsiSingkat')">Deskripsi Singkat</a>
				</li>
				<li class="nav-item" id="submateri">
					<a class="nav-link" href="#" onclick="pagination.move_pagination('<?= $materiName ?>','Materi')">Materi dan Submateri</a>
				</li>
				<li class="nav-item" id="tujuan">
					<a class="nav-link" href="#" onclick="pagination.move_pagination('<?= $materiName ?>','tujuanPembelajaran')">Tujuan Pembelajaran</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- Page Content  -->
<div id="content">
	<?php $this->load->view('template/pagination',$materiName); ?>
	<div class="content">

		<?php $this->load->view('materi/'.$materiName.'/'.$pagination) ?>
	</div>
</div>

<!-- Inclue pagination.js -->
<?= $extra_script ?>
<!-- Global variable -->
<script>
	base_url = '<?= base_url() ?>';
</script>
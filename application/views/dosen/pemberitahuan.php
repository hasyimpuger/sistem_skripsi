<head>
	<script type="text/javascript" src="<?php echo base_url('assets/js/myscript.js');?>">
	</script>
</head>

<?php foreach ($pemberitahuan->result() as $p) {
	?>
	<div class="tabel<?php echo $p->id;?>">
		<div class="card">
			<div class="card-body scroll">
				<div class="form-row">
					<div class="form-group col-1">
						<img class="card-img-top" src="<?php echo base_url('assets/images/'.$p->foto_dsn);?>" alt="Card image">
					</div>
					<div class="form-group col">
						<h5 class="card-title"> <?php echo $p->pemberitahuan ;?> <?php echo $p->status ?></h5>

						<div class="form-group">
							<h6 class="card-subtitle text-muted"> <i class="fas fa-calendar"></i> <?php echo longdate_indo($p->tanggal);?> <i class="fas fa-users"></i> <?php echo $p->nama_dosen;?> </h6>
						</div>
					</div>
					<div class="form-group col-1 text-right">
						<a id="<?php echo $p->id;?>" class="hapus" href="<?php echo base_url('Dosen/hapus_pemberitahuan/'.$p->id);?>"><i class="fas fa-trash-alt"></i></a>
					</div>
					<div class="form-group col-md">
						<ul class="nav flex-column">
							<div><h6>Catatan</h6></div>
							<li class="nav-item">
								<?php echo $p->catatan;?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	
	<?php } ?>
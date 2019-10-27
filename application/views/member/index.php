
<div class="container">
	<?php if($this->session->flashdata('flash')) :?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data member<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
	<?php endif; ?>


	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url();?>/member/tambah" class="btn btn-primary">Add Member</a>
		</div>
	</div>


	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search member.." name="keyword">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit">Search</button>
				</div>
			</div>
			</form>
		</div>
	</div>


	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Member List</h3>
			<?php if( empty($member) ) : ?>
				<div class="alert alert-danger" role="alert">
				data member tidak ditemukan
				</div>
			<?php endif; ?>
			<ul class="list-group">
			<?php foreach($member as $m) : ?>
			  <li class="list-group-item">
				  <?= $m['name']; ?>
				  <a href="<?= base_url(); ?>member/hapus/<?= $m['id']?>" class="badge badge-danger float-right" onclick="return confirm('are you sure?');">delete</a>
				  <a href="<?= base_url(); ?>member/ubah/<?= $m['id']?>" class="badge badge-success float-right">edit</a>
				  <a href="<?= base_url(); ?>member/detail/<?= $m['id']?>" class="badge badge-primary float-right">detail</a>
			</li> 
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

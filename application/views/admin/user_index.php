<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah User
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md-8" role="document">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="">Tambah User</h5>
							<i class="icon-close menu-icon-close"></i>
							
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="username" name="username"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" placeholder="password" name="password"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Data Pengguna</h4>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>USERNAME</th>
							<th>NAMA</th>
							<th>LEVEL</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php foreach($user as $aa) { ?>
						<tr>
							<td><?= $aa['username'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td><?= $aa['level'] ?></td>
							<td>
								<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']); ?>"
									class="btn btn-sm btn-danger"
									onclick="return confirm('apakah anda yakin menghapus data ini')">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-trash" viewBox="0 0 16 16">
										<path
											d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
										<path
											d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
									</svg>
								</a>
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#edit<?= $aa['id_user'] ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-pen" viewBox="0 0 16 16">
										<path
											d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
									</svg>
								</button>
								<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md-8" role="document">
										<form action="<?= base_url('admin/user/update') ?>" method="post">
											<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="">Perbarui Nama User</h5>
													<i class="icon-close menu-icon-close"></i>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Nama</label>
															<input type="text" class="form-control"
																value="<?= $aa['nama'] ?>" name="nama" />
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Username</label>
															<input type="text" class="form-control"
																value="<?= $aa['username'] ?>" name="username"
																readonly />
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
										</form>
									</div>
								</div>
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

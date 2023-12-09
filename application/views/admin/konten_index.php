<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-0">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah Konten
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg-3" role="document">
				<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="">Tambah Konten</h5>
							<i class="icon-close menu-icon-close"></i>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" class="form-control" placeholder="Nama" name="judul" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach($kategori as $aa) { ?>
										<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
										<?php  } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Keterangan</label>
									<textarea name="keterangan" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Foto</label>
									<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Link Youtube</label>
									<input type="text" name="youtube" class="form-control" placeholder="Link Youtube"
										name="youtube" required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
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
			<h4 class="card-title">Kategori Konten</h4>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>NO</th>
							<th>JUDUL</th>
							<th>KATEGORI KONTEN</th>
							<th>TANGGAL</th>
							<th>KREATOR</th>
							<th>FOTO</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php $no=1; foreach($konten as $aa) { ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $aa['judul'] ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td><?= $aa['tanggal'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td>
								<a href="<?= base_url('assets/upload/konten/') .$aa['foto']  ?>" target="_blank">
									<span class="tf-icons bx bx-search"></span> Lihat Foto
								</a>
							</td>
							<td>
								<a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']); ?>"
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
								<!-- Button trigger modal -->

								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#konten<?= $no; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-pen" viewBox="0 0 16 16">
										<path
											d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z">
										</path>
									</svg>
								</button>
								</button>
								<!-- Modal -->
								<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg-3" role="document">
										<form action="<?= base_url('admin/konten/update') ?>" method="post"
											enctype='multipart/form-data'>
											<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id=""><?= $aa['judul'] ?></h5>
													<i class="icon-close menu-icon-close"></i>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Judul</label>
															<input type="text" class="form-control"
																value="<?= $aa['judul'] ?>" name="judul" />
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Kategori</label>
															<select type="text" class="form-control" name="id_kategori">
																<?php foreach($kategori as $uu) { ?>
																<option <?php if($uu['id_kategori'] == $aa['id_kategori']) {
																	 echo"selected";
																} ?>=value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
																<?php  } ?>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Keterangan</label>
															<textarea type="text" class="form-control"
																name="keterangan"><?= $aa['keterangan'] ?></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Link Youtube</label>
															<input type="text" name="youtube" class="form-control"
																placeholder="Link Youtube" name="youtube"
																value="<?= $aa['youtube'] ?>" required>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Foto</label>
															<input type="file" name="foto" class="form-control"
																accept="image/png, image/jpeg">
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</td>
						</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

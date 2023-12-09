
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
    <div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
    <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
			<h4 class="card-title">Konfigurasi</h4>
			<form class="forms-sample">
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Judul Website</label>
              <input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Profile</label>
              <textarea name="profile_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Facebook</label>
              <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Instagram</label>
              <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
              <label class="form-label">Whatsapp</label>
              <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
          </div>
        </div>
        <div class="modal-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
			  </form>
    </form>  
		</div>
	</div>
</div>

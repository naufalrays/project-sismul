<h6><?= validation_errors(); ?></h6>
<h6><?= $this->session->flashdata('error') ?></h6>

<div class="row align-items-center">
  <div class="col-md-10 m-auto">
    <form action="<?= site_url('Home/create'); ?>" method="post" enctype="multipart/form-data">
      <div class="mb-3 mt-3">
        <label for="formGroupExampleInput" class="form-label">Nama</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Praktikan">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">NPM</label>
        <input name="npm" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan NPM">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput3" class="form-label">Kelas</label>
        <input name="class" type="text" class="form-control" id="formGroupExampleInput3" placeholder="Masukkan Kelas">
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="Email" placeholder="Masukkan Email">
      </div>
      <div class="mb-3">
        <label for="File" class="form-label">Filename</label>
        <input name="image" type="file" class="form-control" id="File" accept=".jpg,.png,.jpeg">
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
  </div>
</div>
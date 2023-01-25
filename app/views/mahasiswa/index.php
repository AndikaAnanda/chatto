<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>

  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-2 addData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
      </button>


      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $mhs['nama']; ?>
            <div>
              <a class="badge rounded-md text-bg-primary float-right ml-2" href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>
              <a class="badge rounded-md text-bg-success float-right ml-2 showEditModal" data-bs-toggle="modal" data-bs-target="#formModal" href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['id']; ?>" data-id="<?= $mhs['id']; ?>">Edit</a>
              <a class="badge rounded-md text-bg-danger float-right ml-2" href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Hapus data ?')">Hapus</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>


    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" name="jurusan" id="jurusan">
              <option value="Teknik">Teknik</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
            </select>

          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <?php echo $this->session->flashdata('alert_msg'); ?>
      
      <h1 class="page-header"><?php echo $judul;?></h1>
        <a href="<?=site_url('Siswa/add_siswa')?>" class="btn btn-primary"> Tambah Siswa </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>Kelas</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data_siswa as $key => $value): ?>
                <tr>
                  <td><?=$value->id?></td>
                  <td><?=$value->nama?></td>
                  <td><?=$value->alamat?></td>
                  <td><?=$value->nama_kelas?></td>
                  <td><a href="<?=site_url('Siswa/edit/' .$value->id)?>" class="btn btn-info">Edit</a>
                  <a href="<?=site_url('Siswa/hapus/' .$value->id)?>" class="btn btn-danger" onclick= "return confirm('apakahanda yakin ingin menghapus data ini ?');">Hapus</td>
                </tr>
              <?php endforeach ?>
             
              </tbody>
            </table>
          </div>
          </div>
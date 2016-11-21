      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <?php echo $this->session->flashdata('alert_msg'); ?>
      
      <h1 class="page-header"><?php echo $judul;?></h1>
        <a href="<?=site_url('kelas/add_kelas')?>" class="btn btn-primary"> Tambah kelas </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Kelas</th>
                  <th>Wali kelas</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($kelas as $key => $value): ?>
                <tr>
                  <td><?=$value->id_kelas?></td>
                  <td><?=$value->nama_kelas?></td>
                  <td><?=$value->nama_guru?></td>
                  <td><a href="<?=base_url('kelas/edit/'.$value->id_kelas)?>" class="btn btn-info">Edit</a>
                  <a href="<?=base_url('kelas/act_hapus/'.$value->id_kelas)?>" class="btn btn-danger" onclick= "return confirm('apakahanda yakin ingin menghapus data ini ?');">Hapus</td>
                </tr>
              <?php endforeach ?>
             
              </tbody>
            </table>
          </div>
          </div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <?php echo $this->session->flashdata('alert_msg'); ?>
      
      <h1 class="page-header"><?php echo $judul;?></h1>
        <a href="<?=base_url('Nilai/tambah_nilai')?>" class="btn btn-primary"> Tambah Nilai </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA MAPEL</th>
                  <th>NAMA SISWA</th>
                  <th>NILAI</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

              <?php foreach ($nilai as $key => $value): ?>

                <tr>
                  <td><?=$value->id_nilai?></td>
                  <td><?=$value->nama_mapel?></td>
                  <td><?=$value->nama?></td>
                  <td><?=$value->total_nilai?></td>
                  <td>
                    <a href="<?=base_url('Nilai/edit/'.$value->id_nilai)?>" class="btn btn-primary"> Edit </a>
                    <a href="<?=base_url('Nilai/hapus/'.$value->id_nilai)?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini');"> Hapus</a>

                  </td>
                </tr>
              <?php endforeach ?>
             
              </tbody>
            </table>
          </div>
          </div>
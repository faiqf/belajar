<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <?php echo $this->session->flashdata('alert_msg'); ?>
      
      <h1 class="page-header"><?php echo $judul;?></h1>
        <a href="<?=base_url('Guru/add_guru')?>" class="btn btn-primary"> Tambah guru </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>MAPEL yang diajarkan</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

              <?php foreach ($data_guru as $key => $value): ?>

                <tr>
                  <td><?=$value->id_guru?></td>
                  <td><?=$value->nama_guru?></td>
                  <td><?=$value->nama_mapel?></td>
                  <td>
                    <a href="<?=base_url('Guru/edit/'.$value->id_guru)?>" class="btn btn-primary"> Edit </a>
                    <a href="<?=base_url('Guru/Hapus/'.$value->id_guru)?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini');"> Hapus</a>

                  </td>
                </tr>
              <?php endforeach ?>
             
              </tbody>
            </table>
          </div>
          </div>
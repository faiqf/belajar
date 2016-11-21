      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <?php echo $this->session->flashdata('alert_msg'); ?>
      
      <h1 class="page-header"><?php echo $judul;?></h1>
        <a href="<?=base_url('mapel/add_mapel')?>" class="btn btn-primary"> Tambah Mata Pelajaran </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Mapel</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <?php foreach ($mapel as $key =>$value) :?>
              <tbody>
                  <td><?=$value->id_mapel?></td>
                  <td><?=$value->nama_mapel?></td>
                  <td><a href="<?=base_url('Mapel/edit/'.$value->id_mapel) ?>" class="btn btn-info">Edit</a>
                  <a href="<?=base_url('Mapel/hapus/'.$value->id_mapel) ?>" class="btn btn-danger" onclick= "return confirm('apakahanda yakin ingin menghapus data ini ?');">Hapus</td>
                
                <?php endforeach ?>
                </tr>
             
              </tbody>
            </table>
          </div>
          </div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?php echo $judul;?></h1>
	
	<form class="form-horizontal" method="POST" action="<?=site_url('Siswa/act_edit')?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
       <input type="hidden" name="id" value="<?=$data_siswa->id?>" class="form-control" readonly>
      <input type="text" name="nama" value="<?=$data_siswa->nama?>" class="form-control" placeholder="NAMA">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" name="alamat" value="<?=$data_siswa->alamat?>" class="form-control" placeholder="ALAMAT">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_kelas">
      <option value=""> --- pilih kelas ----</option>
        <?php foreach ($kelas as $key => $value): ?>

          <?php if ($value->id_kelas == $data_siswa->id_kelas) {
            $selected = 'selected';
          }else{
            $selected = '';          
          }
          ?>
        <option value="<?=$value->id_kelas?>" <?=$selected?>><?=$value->nama_kelas?></option>
      <?php endforeach ?>
        
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?=site_url('Siswa')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">simpan</button>
    </div>
  </div>
</form>
</div>
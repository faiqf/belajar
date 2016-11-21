<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?php echo $judul;?></h1>
	
	<form class="form-horizontal" method="POST" action="<?=base_url('nilai/act_tambah')?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Masukan Nilai</label>
    <div class="col-sm-10">
      <input type="text" name="total_nilai" class="form-control" placeholder="1-100">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">MATA PELAJARAN</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_mapel">
      
      <option value=""> --- pilih mata pelajaran ---- </option>
      <?php foreach ($mapel as $key => $value): ?>
        <option value="<?=$value->id_mapel?>"><?=$value->nama_mapel?></option>
      <?php endforeach ?>
        
      </select>
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">NAMA SISWA</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_siswa">
      
      <option value=""> --- pilih Siswa ---- </option>
      <?php foreach ($siswa as $key => $value): ?>
        <option value="<?=$value->id?>"><?=$value->nama?></option>
      <?php endforeach ?>
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?=base_url('Guru')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">simpan</button>
    </div>
  </div>
</form>
</div>
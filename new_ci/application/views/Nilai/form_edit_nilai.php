<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?php echo $judul;?></h1>
  
  <form class="form-horizontal" method="POST" action="<?=site_url('Nilai/act_edit')?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nilai</label>
    <div class="col-sm-10">
       <input type="hidden" name="id" value="<?=$nilai->id_nilai?>" class="form-control" readonly>
      <input type="text" name="nilai" value="<?=$nilai->total_nilai?>" class="form-control" placeholder="Nilai">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Mapel</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_mapel">
      <option value=""> --- pilih mapel ----</option>
        <?php foreach ($mapel as $key => $value): ?>

          <?php if ($value->id_mapel == $nilai->id_mapel) {
            $selected = 'selected';
          }else{
            $selected = '';          
          }
          ?>
        <option value="<?=$value->id_mapel?>" <?=$selected?>><?=$value->nama_mapel?></option>
      <?php endforeach ?>
        
      </select>
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Siswa</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_siswa">
      <option value=""> --- pilih siswa ----</option>
        <?php foreach ($siswa as $key => $value): ?>

          <?php if ($value->id == $nilai->id_siswa) {
            $selected = 'selected';
          }else{
            $selected = '';          
          }
          ?>
        <option value="<?=$value->id?>" <?=$selected?>><?=$value->nama?></option>
      <?php endforeach ?>
        
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?=base_url('Nilai')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">simpan</button>
    </div>
  </div>
</form>
</div>
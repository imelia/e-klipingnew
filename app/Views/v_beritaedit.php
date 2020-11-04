<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BERITA</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DATA BERITA</h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('berita/edit'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
            <div class="col-md-12">
                    <label>Gambar</label><br/>
                    <?php
                        if (!empty($berita->gambar_berita)) {
                            echo '<img src="'.base_url("assets/img/berita/$berita->gambar_berita").'" width="150">';
                        }
                    ?>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<label>JUDUL BERITA</label>
    				<div class="form-group">
                        <input type="hidden" name="id_berita" class="form-control" value="<?=$berita->id_berita?>">
                            <input type="text" name="judul_berita" class="form-control" value="<?=$berita->judul_berita?>"> 
                           
                	</div>	
    			</div>
                <div class="col-md-12">
    				<label>TANGGAL BERITA</label>
    				<div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?=$berita->tanggal?>">
                        <input type="date" name="tanggal" class="form-control" value="<?=$berita->tanggal?>">
                	</div>	
    			</div>

    			<div class="col-md-12">
    				<div class="form-group">
                             <button class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ?')">Simpan</button>
                             <a href="/berita/" class="btn btn-warning float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin kembali ?')"><span class="fa fa-plus" ></span> Batal </a> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
</body>
</html>
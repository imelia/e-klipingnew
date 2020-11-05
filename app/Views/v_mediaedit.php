<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MEDIA</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DATA MEDIA</h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('media/edit'));?>
    <div class="row">
	<div class="col-lg-12">
    		<div class="row">
            <div class="col-md-12">
                    <label>Gambar Koran</label><br/>
                    <?php
                        if (!empty($media->gambar_koran)) {
                            echo '<img src="'.base_url("assets/img/media/$media->gambar_koran").'" width="150">';
                        }
                    ?>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    		
    			<div class="col-md-12">
    				<label>NAMA MEDIA</label>
    				<div class="form-group">
                        <input type="hidden" name="id_media" class="form-control" value="<?=$media->id_media?>">
                   		 <input type="text" name="nama_media" class="form-control" value="<?=$media->nama_media?>"> 
                	</div>	
    			</div>
                

    			<div class="col-md-12">
    				<div class="form-group">
                             <button class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ?')">Simpan</button>
                             <a href="/media/" class="btn btn-warning float-right mb-3" onclick="return confirm('Apakah Anda yakin ingin kembali ?')"><span class="fa fa-plus" ></span> Batal </a> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
</body>
</html>
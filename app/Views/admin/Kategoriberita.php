<div class="container">
    <h3>Kategori Berita</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Kategori Berita</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>ID Media</th>
                    <th>Nama Media</th>
                    <th>Tanggal</th>
                    <th>Gambar Berita</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($kategori_berita as $row):?>
                <tr>
                    <td><?= $row->id_kategori_berita;?></td>
                    <td><?= $row->id_kategori;?></td>
                    <td><?= $row->nama_kategori;?></td>
                    <td><?= $row->id_media;?></td>
                    <td><?= $row->nama_media;?></td>
                    <td><?= $row->tanggal;?></td>
                    <td><?= $row->gambar_berita;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->id_kategori_berita;?>" data-name="<?= $row->id_kategori;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id_kategori_berita;?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
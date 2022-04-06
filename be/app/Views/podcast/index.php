<?=$this->extend('layout/template');?>

<?=$this->section('content');?>

<h1 class="text-center">Daftar Podcast</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <a href="/podcast/create" class="btn btn-primary mb-3">Tambah Data</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                    <?php foreach ($podcast as $p): ?>
                        <tr>
                            <th scope="row"><?=$i++;?></th>
                            <td><?=$p['title'];?></td>
                            <td><?=$p['category'];?></td>
                            <td>
                                <a href="#" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>


        </div>
    </div>
</div>


<?=$this->endSection();?>
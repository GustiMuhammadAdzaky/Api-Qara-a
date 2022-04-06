<!-- 10:34 Tutorial CodeIgniter 4 untuk PEMULA | 10. Validation -->

<?=$this->extend('layout/template')?>

<?=$this->section('content')?>




<div class="container">
    <h1></h1>
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah data</h2>
            <form action="/podcast/save" method="POST" enctype="multipart/form-data">



                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" autofocus>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="voice" class="col-sm-2 col-form-label">Voice</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                id="voice" for="voice" name="voice">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="category" name="category">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                id="image" for="image" name="image">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>



<?=$this->endSection()?>
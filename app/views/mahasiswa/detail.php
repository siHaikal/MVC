<div class="container mt-5">
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <p class="card-text">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">NIP : <?= $data['mhs']['nip']; ?></li>
                    <li class="list-group-item">Email : <?= $data['mhs']['email']; ?></li>
                <div class="mt-4 ">
                    <a class="btn btn-primary updateData" href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-id="<?= $data['mhs']['id']; ?>" >Update</a>
                    <a class="btn btn-danger" href="#" role="button">Hapus</a>
                </div>
            </p>
        </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Update data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= BASEURL ?>mahasiswa/ubah" method="post">
                            <div class="modal-body">
                                <input type="hidden" class="id" name="id" id="id">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control nama" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="number" class="form-control nip" id="nip" name="nip">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control email" id="email" name="email" >
                            </div> 
                                <button type="submit" name="submit" class="btn btn-primary " >Update</button>                   
                            </div>
                        </form>
                    </div>
                </div>
            </di
    </div>
    </div>
</div>
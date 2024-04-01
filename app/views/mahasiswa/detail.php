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
                    <a class="btn btn-primary" href="#" role="button">Update</a>
                    <a class="btn btn-danger" href="#" role="button">Hapus</a>
                </div>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>
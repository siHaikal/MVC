<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mt-5 mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Tambah Data
            </button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= BASEURL ?>mahasiswa/tambah" method="post">
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="nama" id="nama" required>
                                </div>
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"># </span>
                                <input type="text" class="form-control" placeholder="nip" aria-label="Username" aria-describedby="basic-addon1" name="nip" id="nip" required>
                                </div>
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email" id="email" required>
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>   
                                <button type="submit" name="submit" class="btn btn-primary">Add</button>                   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <h3 >Daftar Mahasiswa</h3>
                <div class="list-group mt-3">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <a href="<?= BASEURL . "mahasiswa/detail/" . $mhs["id"]; ?>" class="list-group-item list-group-item-action mt-2" aria-current="true">
                            <?= $mhs["nama"]; ?>
                        </a> 
                    <?php endforeach; ?>
                </div>
        </div>
    </div>
</div>

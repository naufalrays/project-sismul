    <div class="p-4 mt-4">
        <h3>Daftar Mahasiswa Lab Sistem Multimedia</h3>
        <br>
        <?php foreach ($students as $student) : ?>
            <div class="border rounded-4">
                <div class="row ms-2">
                    <div class="col-sm-1 align-self-center">
                        <img class="fit-image mt-3 mb-3 center rounded-circle" src=<?= site_url('uploads/images/' .  $student['filename']) ?> alt="">
                    </div>
                    <div class="col-sm-9 align-self-center">
                        <h5>
                            <?= $student['name'] ?>
                        </h5>
                        <h8>
                            <?= $student['npm'] ?>
                        </h8>
                    </div>
                    <div class="col-sm-2 align-self-center">
                        <button class="btn btn-primary rounded-3 me-2">Edit</button>
                        <button class="btn btn-danger rounded-3">Delete</button>
                    </div>
                </div>
            </div>
            <br>
        <?php endforeach ?>
    </div>
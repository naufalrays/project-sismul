    <div class="p-4 mt-4">
        <h3>Daftar Mahasiswa Lab Sistem Multimedia</h3>
        <br>
        <?php foreach ($students as $student) : ?>
            <div class="border rounded-4">
                <div class="row ms-2">
                    <div class="col-sm-1 align-self-center">
                        <img class="mt-3 mb-3 center rounded-circle" src=<?= site_url('uploads/images/' .  $student['filename']) ?> alt="" style="width: 70px; height: 70px;">
                    </div>
                    <div class="col-sm-9 align-self-center">
                        <h5>
                            <?= $student['name'] ?>
                            (<?= $student['class'] ?>)
                        </h5>
                        <h8>
                            <?= $student['npm'] ?>
                        </h8>
                    </div>
                    <div class="col-sm-2 align-self-center">
                        <a class="btn btn-primary" href="<?= site_url('Home/index/' . $student['id']) ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="<?= site_url('Home/delete/' . $student['id']) ?>" role="button">Delete</a>
                    </div>
                </div>
            </div>
            <br>
        <?php endforeach ?>
    </div>
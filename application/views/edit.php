<div class="p-4 mt-4">
    <h3><?= $student->name ?></h3>
    <br>
    <div class="border rounded-4 text-center p-4">
        <img class="mt-3 mb-3 center rounded-circle" src=<?= site_url('uploads/images/' .  $student->filename) ?> alt="" style="width: 200px; height: 200px;">
        <h5>
            <?= $student->name ?>
            (<?= $student->class ?>)
        </h5>
        <p class="p-0 m-0"><?= $student->npm ?></p>

        <p class="p-0 m-0"> <?= $student->email ?></p>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-primary" href="<?= site_url('Home/update/' . $student->id) ?>" role="button">Edit</a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-danger" href="" role="button">Delete</a>
            </div>
        </div>
    </div>
</div>
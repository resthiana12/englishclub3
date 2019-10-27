
<div class="container">
    <div class="row mt-3">
        <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Members Detail
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $member['name']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $member['nrp']; ?></h6>
                <p class="card-text"><?= $member['motivation']; ?></p>
                <p class="card-text">Instagram : <?= $member['ig']; ?></p>
                <p class="card-text"><?= $member['phone']; ?></p>
                <a href="<?= base_url(); ?>member" class="btn btn-primary">Back</a>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form for Adding Member
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <!-- parameternya berdasarkan name -->
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="motivation">Motivation in joining our group</label>
                            <input type="text" name="motivation" class="form-control" id="motivation">
                            <small class="form-text text-danger"><?= form_error('motivation'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ig">Instagram</label>
                            <input type="text" name="ig" class="form-control" id="ig">
                            <small class="form-text text-danger"><?= form_error('ig'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                            <small class="form-text text-danger"><?= form_error('phone'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Add Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
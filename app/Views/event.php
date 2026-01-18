<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>
<section class="section">
    <title>EO - Event</title>
    <div class="section-header">
        <h1>Event</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>Events Management</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-lg text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($events as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value->event_name ?></td>
                            <td><?= $value->event_date ?></td>
                            <td>
                                <div class="badge badge-success"><?= $value->event_info ?></div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php  endforeach;  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
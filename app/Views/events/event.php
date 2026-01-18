<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>
<section class="section">
    <title>EO - Event</title>
    <div class="section-header">
        <span>Event</span>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Events Management</h3>
                <a href="<?= site_url('event/create') ?>" class="btn btn-outline-primary rounded fw-bold gap-2"><i class="fas fa-plus"></i> Add New Event</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-lg text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>More Information</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($events as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value->event_name ?></td>
                            <td><?= date('d/m/Y', strtotime($value->event_date)) ?></td>
                            <td>
                                <?= $value->event_info ?>
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
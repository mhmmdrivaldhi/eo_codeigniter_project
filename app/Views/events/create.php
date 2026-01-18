<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>
<section class="section">
    <title>EO - Create Event</title>
    <div class="section-header">
        <span class="fw-bold">Event / Create</span>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Add New Events</h3>
                <a href="<?= site_url('event') ?>" class="btn btn-outline-primary rounded"><i
                        class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="<?= site_url('event') ?>" method="POST" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="event_name">Event Name</label>
                        <input type="text" name="event_name" id="event_name" class="form-control"
                            placeholder="Enter the event name . . ." required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="event_name">Event Date</label>
                        <input type="date" name="event_date" id="event_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="event_name">Event Information</label>
                        <textarea type="text" name="event_info" id="event_info" class="form-control"
                            placeholder="Enter information about the event ( Optional )"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="submit" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
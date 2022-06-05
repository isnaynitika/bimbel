<?php if ($this->session->has_userdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible " role="alert">
        <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
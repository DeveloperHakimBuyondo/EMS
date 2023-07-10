



<!-- Admin Logo -->
<div class="brand">
<a href="#" class="brand-logo">
<span class="brand-img">
<span class="brand-img-text text-theme">EMS</span>
</span>
<?php if($this->session->userdata('logged_in')): ?>
    <span class="brand-text text-uppercase"><?php //echo substr($this->session->userdata('username'), 0, 2); ?></span>
<?php endif; ?>
</a>
</div>
<!-- Admin Logo -->
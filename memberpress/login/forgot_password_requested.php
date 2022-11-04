<?php if (!defined('ABSPATH')) {
  die('You are not allowed to call this page directly.');
} ?>

<div class="forgot_password">
  <div class="container mx-auto">
    <?php
    $reset_error = isset($_REQUEST['error']) ? $_REQUEST['error'] : "";

    if (!empty($reset_error)) {
      $errors[] = $reset_error;
    ?>
      <div class="mepr_password_reset_requested">
        <h3 class="text-center mb-4 text-2xl"><?php _ex('Password could not be reset.', 'ui', 'memberpress'); ?></h3>
        <?php MeprView::render('/shared/errors', get_defined_vars()); ?>
        <div><?php _ex('Please contact us for further assistance.', 'ui', 'memberpress'); ?></div>
      </div>
    <?php
    } else {
    ?>
      <div class="mepr_password_reset_requested">
        <h3 class="text-center mb-4 text-2xl"><?php _ex('Successfully requested password reset', 'ui', 'memberpress'); ?></h3>
        <p><?php _ex('Please click on the confirmation link that was just sent to your email address.', 'ui', 'memberpress'); ?></p>
      </div>
    <?php } ?>
  </div>
</div>
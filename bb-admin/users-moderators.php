<?php
require_once('admin.php');
bb_get_admin_header();

// Query the users
$bb_moderators = new BB_Users_By_Role( bb_trusted_roles(), $_GET['userspage'] );
$bb_moderators->title = __('Forum Administrators');
$bb_moderators->display();

bb_get_admin_footer();
?>

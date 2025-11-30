<?php
require_once 'config/config.php';

if (is_logged_in()) {
    $role = get_user_role();
    switch ($role) {
        case ROLE_STUDENT:
            redirect('views/student/dashboard.php');
            break;
        case ROLE_TEACHER:
            redirect('views/teacher/dashboard.php');
            break;
        case ROLE_GUIDANCE:
            redirect('views/guidance/dashboard.php');
            break;
        default:
            redirect('login.php');
    }
} else {
    redirect('login.php');
}
?>
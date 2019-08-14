<?php

function check_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Auth');
    }
}

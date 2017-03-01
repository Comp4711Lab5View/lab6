<?php

/**
 * Created by PhpStorm.
 * User: waynewang
 * Date: 2017-03-01
 * Time: 10:45 AM
 */

class Roles extends Application
{

    public function actor($role = ROLE_GUEST)
    {
        $this->session->set_userdata('userrole',$role);
        redirect($_SERVER['HTTP_REFERER']); // back where we came from
    }

}

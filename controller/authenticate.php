<?php

    _auth_authenticate();
    if(!auth_ok()){
        flash_set(__('Wrong username and/or password!'));
        redirect(uri('login'));
    }
    else{
        flash_set(__('Welcome!'));
        redirect(uri('zivotopisi/pregled'));
    }

?>
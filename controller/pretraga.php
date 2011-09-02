<?php

    auth_require('login');
    
    if(!uri_is_post_request())
        redirect(uri('zivotopisi'));
        
    redirect(uri('zivotopisi/pregled') . '?q=' . $_REQUEST['q']);

?>
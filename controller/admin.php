<?php

    auth_require('login');
    $content_title = 'Pregled životopisa';
    
    if(!$_REQUEST['id'] && !$_REQUEST['q'])
    {
        $cvs = db_select_list('SELECT id,firstname,lastname,faculty,courseyear FROM cvs ORDER BY firstname');
        $content_page = 'pregled_zivotopisa';
    }
    else
    {   
        if(isset($_REQUEST['id']))
        {
            $cv = db_get_record_by_id('cvs', $_REQUEST['id']);
            $content_page = 'prikaz_zivotopisa';
        }
        
        if(isset($_REQUEST['q']))
        {
            $q = $_REQUEST['q'];
            $cvs = db_select_list('SELECT id,firstname,lastname,faculty,courseyear FROM cvs WHERE faculty LIKE "%'.$q.'%" OR courseyear LIKE "%'.$q.'%" OR activities LIKE "%'.$q.'%" OR extras LIKE "%'.$q.'%" OR languages LIKE "%'.$q.'%" OR skills LIKE "%'.$q.'%" OR workexp LIKE "%'.$q.'%" OR prefs LIKE "%'.$q.'%"');
            $content_page = 'pregled_zivotopisa';
        }
    }
    
    require_once('view/page.php');

?>

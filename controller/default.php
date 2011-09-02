<?php
     
    // glavni i jedini frontend kontroler 
    
    switch(get_uri_segment(1))
    {
        case 'sudionici':
            $content_page = 'sudionici';
            $content_title = 'Sudionici';
        break;
    
        case 'zivotopisi':
            $content_page = 'zivotopisi';
            if(get_uri_segment(2) == 'predaja')
            {
                if(!uri_is_post_request())
                    redirect(uri('zivotopisi'));
                
                $table_name = 'cvs';
                $fields = db_select_list('DESCRIBE ' . $table_name);
                $fields_names = array();
                for($i = 1; $i < count($fields); $i++)
                    array_push($fields_names, $fields[$i]['Field']);
                unset($fields_names[14]);
                $post = uri_post_params($fields_names);
                $post['languages'] = $_POST['lang1'] . ' - ' . $_POST['op1'] . ' ' . $_POST['lang2'] . ' - ' . $_POST['op2'] . ' ' . $_POST['lang3'] . ' - ' . $_POST['op3'];
                db_insert_record($table_name, $post);
                $message = 'Životopis je uspješno unesen u bazu.<br />' . '<a href="' . uri('zivotopisi') . '">Novi životopis</a>';
                $content_page = 'message';
            }
            $content_title = 'Životopisi';
        break;
    
        case 'media':
            $content_page = 'media';
            $content_title = 'Media';
        break;
    
        case 'organizatori':
            $content_page = 'organizatori';
            $content_title = 'Organizatori';
        break;
        
        default:
            $content_page = 'pocetna';
            $content_title = 'Početna';
    }
    
    require_once('view/page.php');

?>

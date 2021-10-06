<?php

if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = '../assets/'.$filename;
    if(!empty($filename) && file_exists($filepath)){

    }
}
$file = '../assets/file/admission_form.docx';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
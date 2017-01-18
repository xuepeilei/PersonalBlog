<?
    header('Content-Disposition:  filename=cert.pdf');
    header('Content-type: application/pdf');

    $filename = '../images/system/firparks.pdf';
    $fp = fopen ($filename, 'r');
    $output = fread($fp, filesize($filename));
    fclose ($fp);

    echo $output;
?>

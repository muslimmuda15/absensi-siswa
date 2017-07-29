<?php
    function indonesian_date ($date_format = 'd-F-Y') {
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
        'Oktober','November','Desember',
    );
    $date = date ($date_format);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date}";
    return $date;
} 
    
function toDefault($date)
{
    $pattern = array('/Januari/','/Februari/','/Maret/','/April/','/Mei/','/Juni/','/Juli/','/Agustus/','/September/','/Oktober/','/November/','/Desember/');
    $replace = array('01','02','03','04','05','06','07','08','09','10','11','12');
    $date = new DateTime(preg_replace($pattern, $replace, $date));
    $date = $date->format('Y-m-d');
//    echo "<script>window.alert(\"$date\")</script>";
    return $date;
}
?>
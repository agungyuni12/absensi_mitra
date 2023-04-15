<?php
include '../config/config.php';

// post text
$username = $_POST['username'];
$nama = $_POST['nama'];
$status = $_POST['status'];
$nbs = $_POST['nbs'];
$ruta = $_POST['ruta'];
$lokasi = $_POST['lokasi']; 

// file upload
$rand = rand();
$filename = $_FILES['file']['name'];
$ekstensi =  array('png','jpg','jpeg','gif');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ukuran = $_FILES['file']['size'];
$location = "../gambar/";
$xx = $rand.'_'.$filename;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABSENSI MITRA LONGFORM 2020 BPS KABUPATEN DOMPU</title>
    <link rel="stylesheet" type="text/css" href="..\files\assets\sweetalert\sweetalert.css">
    <script src="..\files\assets\sweetalert\sweetalert.min.js"></script>
</head>
<body>
<?php

// gps to numeric
function gps2Num($coordPart){
    $parts = explode('/', $coordPart);
    if(count($parts) <= 0)
    return 0;
    if(count($parts) == 1)
    return $parts[0];
    return floatval($parts[0]) / floatval($parts[1]);
}

// get image location
function get_image_location($image = ''){
    $exif = exif_read_data($image, 0, true);
    if($exif && isset($exif['GPS'])){
        $GPSLatitudeRef = $exif['GPS']['GPSLatitudeRef'];
        $GPSLatitude    = $exif['GPS']['GPSLatitude'];
        $GPSLongitudeRef= $exif['GPS']['GPSLongitudeRef'];
        $GPSLongitude   = $exif['GPS']['GPSLongitude'];
        
        $lat_degrees = count($GPSLatitude) > 0 ? gps2Num($GPSLatitude[0]) : 0;
        $lat_minutes = count($GPSLatitude) > 1 ? gps2Num($GPSLatitude[1]) : 0;
        $lat_seconds = count($GPSLatitude) > 2 ? gps2Num($GPSLatitude[2]) : 0;
        
        $lon_degrees = count($GPSLongitude) > 0 ? gps2Num($GPSLongitude[0]) : 0;
        $lon_minutes = count($GPSLongitude) > 1 ? gps2Num($GPSLongitude[1]) : 0;
        $lon_seconds = count($GPSLongitude) > 2 ? gps2Num($GPSLongitude[2]) : 0;
        
        $lat_direction = ($GPSLatitudeRef == 'W' or $GPSLatitudeRef == 'S') ? -1 : 1;
        $lon_direction = ($GPSLongitudeRef == 'W' or $GPSLongitudeRef == 'S') ? -1 : 1;
        
        $latitude = $lat_direction * ($lat_degrees + ($lat_minutes / 60) + ($lat_seconds / (60*60)));
        $longitude = $lon_direction * ($lon_degrees + ($lon_minutes / 60) + ($lon_seconds / (60*60)));

        return array('latitude'=>$latitude, 'longitude'=>$longitude);
    }else{
        return false;
    }
}

$tmp=$_FILES['file']['tmp_name'];
if ($status == 'offline') {
    $image_loc = get_image_location($tmp);
    $lat = $image_loc['latitude'];
    $long = $image_loc['longitude'];
} elseif ($status == 'online') {
    $lokasi1 = explode(",", $lokasi);
    $lat = $lokasi1[0]; 
    $long = $lokasi1[1];
}
// upload to sql
if(move_uploaded_file($tmp,$location.$xx)){
    mysqli_query($conn,"INSERT INTO absen(username,nama,foto,tanggal,nbs,latitude,longitude,jumlah_ruta) VALUES ('$username','$nama','$xx',now(),'$nbs','$lat','$long','$ruta')");
    ?>
    <script>
    swal({
        icon:"success",
        title:"Berhasil ",
        text:" Data berhasil disimpan pada <?php echo date('Y-m-d H:i:s');?>",
        }).then(function() {
        window.location = "index.php";
        });
    </script>
    <?php

}
?>
</body>
</html>
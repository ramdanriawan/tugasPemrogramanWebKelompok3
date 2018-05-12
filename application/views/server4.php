<?php
include "server.php";

//khusus metrotvnews
$url         = "http://bola.metrotvnews.com/";
$getHtml     = gzdecode(file_get_contents($url));
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq("#content ul li");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find("h2 a")->eq($a)->text(),
        "description" => $dataBerita->find("p")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".block img")->eq($a)->attr('src'),
        "sumber"      => "http://www.metrotvnews.com",
        "link"        => $dataBerita->find("h2 a")->eq($a)->attr("href"),
        "category"    => "Bola"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "http://otomotif.metrotvnews.com/";
$getHtml     = gzdecode(file_get_contents($url));
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq("#content ul li");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find("h2 a")->eq($a)->text(),
        "description" => $dataBerita->find("p")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".block img")->eq($a)->attr('src'),
        "sumber"      => "http://www.metrotvnews.com",
        "link"        => $dataBerita->find("h2 a")->eq($a)->attr("href"),
        "category"    => "Otomotif"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "http://teknologi.metrotvnews.com/";
$getHtml     = gzdecode(file_get_contents($url));
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq("#content ul li");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find("h2 a")->eq($a)->text(),
        "description" => $dataBerita->find("p")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".block img")->eq($a)->attr('src'),
        "sumber"      => "http://www.metrotvnews.com",
        "link"        => $dataBerita->find("h2 a")->eq($a)->attr("href"),
        "category"    => "Tekno"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "http://ekonomi.metrotvnews.com/";
$getHtml     = gzdecode(file_get_contents($url));
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq("#content ul li");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find("h2 a")->eq($a)->text(),
        "description" => $dataBerita->find("p")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".block img")->eq($a)->attr('src'),
        "sumber"      => "http://www.metrotvnews.com",
        "link"        => $dataBerita->find("h2 a")->eq($a)->attr("href"),
        "category"    => "Ekonomi"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

echo "<pre>";

print_r($dataBeritaAsli);

$this->db->insert_batch("beritaindonesia", $dataBeritaAsli);
$this->db->insert_id();


 ?>

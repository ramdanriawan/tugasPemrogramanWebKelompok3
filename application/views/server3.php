<?php

include "server.php";

//khusus viva.co.id
$url         = "https://www.viva.co.id/bola";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".c-split-1.clearenter");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "description" => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".flex_lazy img")->eq($a)->attr('data-original'),
        "sumber"      => "http://www.viva.co.id",
        "link"        => $dataBerita->find("a.title-content")->eq($a)->attr("href"),
        "category"    => "Bola"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.viva.co.id/gaya-hidup";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".c-split-1.clearenter");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "description" => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".flex_lazy img")->eq($a)->attr('data-original'),
        "sumber"      => "http://www.viva.co.id",
        "link"        => $dataBerita->find("a.title-content")->eq($a)->attr("href"),
        "category"    => "Lifestyle"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.viva.co.id/otomotif";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".c-split-1.clearenter");


for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "description" => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".flex_lazy img")->eq($a)->attr('data-original'),
        "sumber"      => "http://www.viva.co.id",
        "link"        => $dataBerita->find("a.title-content")->eq($a)->attr("href"),
        "category"    => "Otomotif"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.viva.co.id/digital";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".c-split-1.clearenter");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "description" => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".flex_lazy img")->eq($a)->attr('data-original'),
        "sumber"      => "http://www.viva.co.id",
        "link"        => $dataBerita->find("a.title-content")->eq($a)->attr("href"),
        "category"    => "Tekno"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.viva.co.id/berita/dunia";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".c-split-1.clearenter");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "description" => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".flex_lazy img")->eq($a)->attr('data-original'),
        "sumber"      => "http://www.viva.co.id",
        "link"        => $dataBerita->find("a.title-content")->eq($a)->attr("href"),
        "category"    => "Dunia"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.viva.co.id/berita/politik";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".c-split-1.clearenter");

for($a=0; $a<3; $a++)
{
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "description" => $dataBerita->find(".title-content h3")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".flex_lazy img")->eq($a)->attr('data-original'),
        "sumber"      => "http://www.viva.co.id",
        "link"        => $dataBerita->find("a.title-content")->eq($a)->attr("href"),
        "category"    => "Politik"
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

 <?php ini_set("max_execution_time", 1000000); ?>

<?php include_once "phpQuery/phpQuery.php"; ?>

<?php
//variabel untuk menyimpan semua nilai data beria
$dataBeritaAsli = array();

// khusus liputan6.com
$url         = "https://www.liputan6.com/bola";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

for ($a=0; $a<3; $a++) {
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq($a)->text(),
        "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq($a)->attr('data-src'),
        "sumber"      => "http://www.liputan6.com",
        "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq($a)->attr('href'),
        "category"    => "Bola"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.liputan6.com/lifestyle";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

for ($a=0; $a<3; $a++) {
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq($a)->text(),
        "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq($a)->attr('data-src'),
        "sumber"      => "http://www.liputan6.com",
        "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq($a)->attr('href'),
        "category"    => "Lifestyle"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.liputan6.com/otomotif";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

for ($a=0; $a<3; $a++) {
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq($a)->text(),
        "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq($a)->attr('data-src'),
        "sumber"      => "http://www.liputan6.com",
        "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq($a)->attr('href'),
        "category"    => "Otomotif"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}


$url         = "https://www.liputan6.com/tekno";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

for ($a=0; $a<3; $a++) {
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq($a)->text(),
        "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq($a)->attr('data-src'),
        "sumber"      => "http://www.liputan6.com",
        "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq($a)->attr('href'),
        "category"    => "Tekno"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.liputan6.com/bisnis";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

for ($a=0; $a<3; $a++) {
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq($a)->text(),
        "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq($a)->attr('data-src'),
        "sumber"      => "http://www.liputan6.com",
        "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq($a)->attr('href'),
        "category"    => "Bisnis"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}

$url         = "https://www.liputan6.com/properti";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

for ($a=0; $a<3; $a++) {
    $arrayBerita = array(
        "tgl"         => date("d M Y, h:i:s"),
        "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq($a)->text(),
        "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq($a)->text(),
        "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq($a)->attr('data-src'),
        "sumber"      => "http://www.liputan6.com",
        "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq($a)->attr('href'),
        "category"    => "Properti"
    );

    $arrayBerita["judul"] = $this->db->escape_str($arrayBerita["judul"]);

    $cek = $this->db->query("select COUNT(*) judul from beritaindonesia where judul ='$arrayBerita[judul]'")->result()[0]->judul;

    if(!empty($arrayBerita["judul"]) && $cek < 1)
    {
        array_push($dataBeritaAsli, $arrayBerita);
    }
}


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

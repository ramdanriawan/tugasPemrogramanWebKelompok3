<?php include_once "phpQuery/phpQuery.php"; ?>

<?php
// khusus liputan6.com
$url         = "https://www.liputan6.com/bola";
$getHtml     = file_get_contents($url);
$newDocument = phpQuery::newDocument($getHtml);
$dataBerita  = pq(".articles--iridescent-list");

$arrayBerita = array(
    "tgl"         => date("d M Y, h:i:s"),
    "judul"       => $dataBerita->find(".articles--iridescent-list--text-item__title-link-text")->eq(0)->text(),
    "description" => $dataBerita->find(".articles--iridescent-list--text-item__summary")->eq(0)->text(),
    "gambar"      => $dataBerita->find(".articles--iridescent-list--text-item__figure-image img")->eq(0)->attr('data-src'),
    "sumber"      => "http://www.liputan6.com",
    "link"        => $dataBerita->find(".ui--a.articles--iridescent-list--text-item__title-link")->eq(0)->attr('href')
);

echo "<pre>";

print_r($arrayBerita);

// khusus kompas.com
// $url         = "https://edukasi.kompas.com/";
// $getHtml     = file_get_contents($url);
// $newDocument = phpQuery::newDocument($getHtml);
// $dataBerita  = pq(".latest--news.mt2.clearfix");
// $listBerita  = $dataBerita->find(".article__title.article__title--medium .article__link")->eq(0)->text();
//
// echo $listBerita;

// khusus viva.co.id
// $url         = "https://www.viva.co.id/tag/pendidikan";
// $getHtml     = file_get_contents($url);
// $newDocument = phpQuery::newDocument($getHtml);
// $dataBerita  = pq("#load_artikel_content");
// $listBerita  = $dataBerita->find(".title-content h3")->eq(0)->text();
//
// echo $listBerita;

// khusus detik.com
// $url         = "https://www.detik.com/tag/dunia-pendidikan/";
// $getHtml     = file_get_contents($url);
// $newDocument = phpQuery::newDocument($getHtml);
// $dataBerita  = pq(".list.media_rows.list-berita");
// $listBerita  = $dataBerita->find(".box_text .title")->eq(0)->text();
//
// echo $listBerita;

// khusus metrotvnews
// $url         = "http://www.metrotvnews.com/topic/306";
// $getHtml     = file_get_contents($url);
// $newDocument = phpQuery::newDocument($getHtml);
// $dataBerita  = pq("ul.style_04");
// $listBerita  = $dataBerita->find("h2 a")->eq(0)->text();
//
// echo $listBerita;

 ?>

<?php
//
// $query = $this->db->query("select * from beritaIndonesia");
//
// echo "<pre>";
// print_r($query->result());
//
// $data = array(
//     "tgl" => "09 january 1999, 5:30 wib",
//     "judul" => "ini adalah judul judulnya saja",
//     "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
//     "gambar" => "https://www.lagioke.net/wp-content/uploads/2015/04/Gambar-Ilusi.jpg",
//     "sumber" => "http://www.liputan6.com"
// );
//
// $this->db->insert("beritaIndonesias", $data);
//
// echo $this->db->insert_id();

 ?>

<div class="recent-box-pagination">
    <div class="pagination">
        <?php

            $category   = $this->db->query("select COUNT(*) judul from beritaindonesia where category='$_GET[category]'");
            $jumlah     = $category->result()[0]->judul;
            $offset     = $this->config->item("pageOffset");
            $jumlahPage = ceil($jumlah / $this->config->item("pageOffset"));

            if(!isset($_GET["pageNow"]))
            {
                $_GET["pageNow"] = 1;
            }
         ?>



        <span class="pages"><?php echo $_GET["pageNow"] ?> of <?php echo $jumlahPage; ?> </span>

        <?php

            if(!isset($_GET["pageNow"]))
            {
                $_GET["pageNow"] = 1;
            }

            // $d = $_GET["pageNow"] - 1;
            // $limit = $_GET["limit"] - $this->config->item("pageOffset");
            //
            // if(!$_GET["pageNow"] - 1 <= 0)
            // {
            // 	echo "<a href=/category?category=$_GET[category]&limit=$limit&offset=$offset&pageNow=$d>Prev &laquo;</a>";
            // }

            for($a=0; $a<$jumlahPage; $a++)
            {
            $limit      = $a * $this->config->item("pageOffset");
            $b = $a+1;
            $c = $_GET["pageNow"]+1;

                if($_GET["pageNow"] == $b)
                {
                    echo "<span class='current'>$b</span>";
                }else
                {
                    echo "<a href='/category?category=$_GET[category]&limit=$limit&offset=$offset&pageNow=$b' class='page' title='$b'>$b</a>";
                }
            }

            // if(!$_GET["pageNow"] + 1 >= $jumlahPage)
            // {
            // 	echo "<a href=/category?category=$_GET[category]&limit=$limit&offset=$offset&pageNow=$c>Next &raquo;</a>";
            // }



         ?>

        <span class="extend">...</span>

    </div>
</div>

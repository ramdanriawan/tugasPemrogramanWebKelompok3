	<?php

$query = $this->db->where("category", "bola")->get("beritaindonesia")->row();

print_r($query->judul);
	?>

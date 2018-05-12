<?php /**
 *
 */
class Search extends CI_Controller
{

    function index()
    {
        $_GET["q"] = $this->db->escape_str($_GET["q"]);
        $this->load->view("search");
    }
}
 ?>

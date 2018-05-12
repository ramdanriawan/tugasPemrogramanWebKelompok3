<?php /**
 *
 */
class Category extends CI_Controller
{
    public function index()
    {
        $_GET["category"] = $this->db->escape_str($_GET["category"]);
        $this->load->view("category");
    }
}

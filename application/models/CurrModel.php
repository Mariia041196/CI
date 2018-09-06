<?php
class Blog_model extends CI_Model {

public $cource;

public function __construct()
{
    // Call the CI_Model constructor
    parent::__construct();
}



public function get_history()
{
$this->db->cache_on();
$this->load->database($config);
$query = $this->db->query('SELECT * FROM `CV`');

    foreach ($query->result_array() as $row)
{
        echo $row['id'];
        echo $row['currency'];
        echo $row['value'];
}
return $query->result();
}

public function print_arr($arr)
{
    echo '<pre>' . print_r($arr, true) .'</pre>';
}
public function get_course($curr)
{
    $data = file_get_contents(LINK);
    if (!$data) return false;
    $courses = json_decode($data);
    $cource_curr = false; 
    foreach ($courses as $cource) {
        if ($cource['ccy']==$curr){
            $cource_curr = $course['buy'];
            break;
        }

    }
    return $course_curr;
}
public function insert_currency()
{
    $this->db->cache_on();
    $this->load->database($config);
    $this->course    = $_POST['currency']; 
    $this->cource_curr  = $_POST['value'];

    $this->db->insert('CV', $this);

}
}
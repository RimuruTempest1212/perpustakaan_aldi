<?php
class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user()
    {

        $query = $this->db->get('user');
        return $query->result();
    }

    public function insert_user($data)
    {
        $this->db->insert('user', $data);
    }

    public function get_user_by_id($id)
    {
        $query = $this->db->get_where('user', array('user_id' => $id));

        return $query->row();
    }
    public function update_user($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->set($data);
        $this->db->update('user', $data);
    }

    public function delete_user($id)
    {


        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    function delete_data($id)
    {
        $this->db->where('user_id', $id);

        return $this->db->get('user');
        // $this->db->delete('user', array('id' => $id));
    }
}

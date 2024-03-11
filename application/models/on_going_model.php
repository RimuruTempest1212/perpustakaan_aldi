<?php
class On_Going_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_going()
    {
        
        $query = $this->db->get('on_going');
        return $query->result();
    }

    public function insert_on_going($data)
    {
        $this->db->insert('on_going', $data);
    }

    public function get_on_going_by_id($id)
    {
        $query = $this->db->get_where('on_going', array('going_id' => $id));

        return $query->row();
    }
    public function update_on_going($on_going_id, $data)
    {
        $this->db->where('going_id', $on_going_id);
        $this->db->set($data);
        $this->db->update('on_going', $data);
    }

    public function delete_on_going($on_going_id)
    {


        $this->db->where('on_going_id', $on_going_id);
        $this->db->delete('on_going');
    }

    function delete_data($id)
    {
        $this->db->where('on_going_id', $id);

        return $this->db->get('on_going');
        // $this->db->delete('on_going', array('on_going_id' => $id));
    }

}

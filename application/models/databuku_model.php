<?php
class DataBuku_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_buku()
    {
        
        $query = $this->db->get('buku');
        return $query->result();
    }

    public function insert_buku($data)
    {
        $this->db->insert('buku', $data);
    }

    public function get_buku_by_id($id)
    {
        $query = $this->db->get_where('buku', array('buku_id' => $id));

        return $query->row();
    }
    public function update_buku($buku_id, $data)
    {
        $this->db->where('buku_id', $buku_id);
        $this->db->set($data);
        $this->db->update('buku', $data);
    }

    public function delete_buku($buku_id)
    {


        $this->db->where('buku_id', $buku_id);
        $this->db->delete('buku');
    }

    function delete_data($id)
    {
        $this->db->where('buku_id', $id);

        return $this->db->get('buku');
        // $this->db->delete('buku', array('buku_id' => $id));
    }

}

<?php
class kategoribuku_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_kategoribuku()
    {

        $query = $this->db->get('kategoribuku');
        return $query->result();
    }

    public function insert_kategoribuku($data)
    {
        $this->db->insert('kategoribuku', $data);
    }

    public function get_kategoribuku_by_id($id)
    {
        $query = $this->db->get_where('kategoribuku', array('kategori_id' => $id));

        return $query->row();
    }
    public function update_kategoribuku($kategori_id, $data)
    {
        $this->db->where('kategori_id', $kategori_id);
        $this->db->set($data);
        $this->db->update('kategoribuku', $data);
    }

    public function delete_kategoribuku($kategori_id)
    {


        $this->db->where('kategori_id', $kategori_id);
        $this->db->delete('kategoribuku');
    }

    function delete_data($id)
    {
        $this->db->where('kategori_id', $id);

        return $this->db->get('kategoribuku');
        // $this->db->delete('kategoribuku', array('kategori_id' => $id));
    }
}

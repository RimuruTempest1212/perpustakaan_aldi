<?php
class Pinjaman_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_pinjaman()
    {
        $query = $this->db->get('peminjaman');
        return $query->result();
    }

    public function insert_pinjaman($data)
    {
        $this->db->insert('peminjaman', $data);
    }

    public function get_pinjaman_by_id($id)
    {
        $query = $this->db->get_where('peminjaman', array('peminjaman_id' => $id));

        return $query->row();
    }

    public function update_pinjaman($peminjaman_id, $data)
    {
        $this->db->where('peminjaman_id', $peminjaman_id);

        $this->db->update('peminjaman', $data);
    }

    public function delete_pinjaman($id)
    {
        $this->db->where('peminjaman_id', $id);
        $this->db->delete('peminjaman');
    }

    function delete_pinjaman_data($id)
    {
        $this->db->delete('peminjaman', array('peminjaman_id' => $id));
    }
}

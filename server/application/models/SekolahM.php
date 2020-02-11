<?php

class SekolahM extends CI_Model
{
    public function getSekolah($id = null)
    {
        if ($id === null) {
            return $this->db->get('tbSekolah')->result_array();
        } else {
            return $this->db->get_where('tbSekolah', ['id' => $id])->result_array();
        }
    }

    public function deleteSekolah($id)
    {
        $this->db->delete('tbSekolah', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createSekolah($data)
    {
        $this->db->insert('tbSekolah', $data);
        return $this->db->affected_rows();
    }

    public function updateSekolah($data, $id)
    {
        $this->db->update('tbSekolah', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}

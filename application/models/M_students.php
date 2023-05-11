<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_students extends CI_Model
{
    public function create($id, $filename)
    {
        $data = array(
            'id' => $id,
            'name' => $this->input->post('name', TRUE),
            'npm' => $this->input->post('npm', TRUE),
            'class'  => $this->input->post('class', TRUE),
            'email'  => $this->input->post('email', TRUE),
            'filename' => $filename,
        );
        $this->db->insert('students', $data);
    }

    public function read($id = FALSE)
    {
        if ($id === FALSE) {
            return $this->db->get('students')->result_array();
        } else {
            $query = $this->db->get_where('students', array('id' => $id));
            return $query->row();
        }
    }

    public function update($id)
    {
        $data = array(
            'id' => $id,
            'name' => $this->input->post('name', TRUE),
            'npm' => $this->input->post('npm', TRUE),
            'class'  => $this->input->post('class', TRUE),
            'email'  => $this->input->post('email', TRUE),
        );
        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Devices_m extends CI_Model
{
    public function get_all_devices()
    {
        $query = $this->db->get('device_mppt');
        return $query->result();
    }
    public function get_row_device($id_device)
    {
        $this->db->where('id_device', $id_device);
        $query = $this->db->get('device_mppt');
        return $query->row();
    }
    public function jumlah_section()
    {
        $query = $this->db->get('device_mppt');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}

/* End of file section_m.php */

<?php
class Bugs_model extends MY_Model
{

    public function add_bug($data)
    {
        $this->db->insert('tbl_bug', $data);
        return true;
    }
    public function update_bug($data)
    {
        $this->db->where('bug_id', $data['id']);
        unset($data['id']);
        return $this->db->update('tbl_bug', $data);
        return true;
    }
    public function DeleteBugsData($data)
    {
        $this->db->where($data);
        $results = $this->db->delete('tbl_bug');
        if ($results) {
            return 1;
        } else {
            return 0;
        }
    }

    public function bugDetail($id)
    {
        return $this->db->where('bug_id', $id)->get('tbl_bug')->result();
    }

}

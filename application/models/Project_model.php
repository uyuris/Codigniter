<?php  
class Project_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_all() {
      $projects = $this->db->get('projects')->result();
      return $projects;
    }
    public function get($id) {
      $project = $this->db->get_where('projects', ['id' => $id])->row();
      return $project;
    }
    public function store() {
      $data = [
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description')
      ];
      $result = $this->db->insert('projects', $data);
      return $result;
    }
    public function delete($id) {
      $result = $this->db->delete('projects', array('id' => $id));
      return $result;
    }

    public function update($id) 
    {
      $data = [
          'name'        => $this->input->post('name'),
          'description' => $this->input->post('description')
      ];

      $result = $this->db->where('id',$id)->update('projects',$data);
      return $result;
                 
    }
  }
?>
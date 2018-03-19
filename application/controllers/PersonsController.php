<?php
/**
 * Created by PhpStorm.
 * User: Clarisse
 * Date: 12-Mar-18
 * Time: 4:02 PM
 */
class PersonsController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index()
    {
        $query = $this->db->get("persons");
        $data['records'] = $query->result();

        $this->load->helper('url');
        $this->load->view('persons/PersonView', $data);
    }

    public function add_person_view()
    {
        $this->load->helper('form');
        $this->load->view('persons/PersonAdd');
    }

    public function add_person()
    {
        $this->load->model('PersonModel');

        $data = array(
            'PersonID' => $this->input->post('PersonID'),
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Email' => $this->input->post('Email'),
        );

        $this->PersonModel->insert($data);

        $query = $this->db->get("persons");
        $data['records'] = $query->result();
        $this->load->view('persons/PersonView', $data);
    }

    public function update_person_view()
    {
        $this->load->helper('form');
        $PersonID = $this->uri->segment('3');
        $query = $this->db->get_where("persons", array("PersonID" => $PersonID));
        $data['records'] = $query->result();
        $data['old_PersonID'] = $PersonID;
        $this->load->view('persons/PersonEdit', $data);
    }

    public function update_person()
    {
        $this->load->model('PersonModel');

        $data = array(
            'PersonID' => $this->input->post('PersonID'),
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Email' => $this->input->post('Email'),
        );

        $old_PersonID = $this->input->post('old_PersonID');
        $this->PersonModel->update($data, $old_PersonID);

        $query = $this->db->get("persons");
        $data['records'] = $query->result();
        $this->load->view('persons/PersonView', $data);
    }

    public function delete_person()
    {
        $this->load->model('PersonModel');
        $PersonID = $this->uri->segment('3');
        $this->PersonModel->delete($PersonID);

        $query = $this->db->get("persons");
        $data['records'] = $query->result();
        $this->load->view('persons/PersonView', $data);
    }
}
<?php
class Api extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_event');
        $this->load->library('upload');
        $this->load->model('M_user', 'user');
        $this->load->helper(array('url', 'security'));
    }
    public function get_user()
    {
        $data = $this->user->get_all_user();
        $final = array();
        foreach ($data->result() as $a) {
            $final[] = array(
                'id' => $a->id,
                'password' => $a->password,
                'name' => $a->name,
                'access' => $a->access
            );
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($final));
    }
    public function insert()
    {
        $id = str_replace("'", "", $this->input->post('id'));
        $password = str_replace("'", "", $this->input->post('password'));
        $confirm_password = str_replace("'", "", $this->input->post('password2'));
        $name = str_replace("'", "", $this->input->post('name'));
        $access = str_replace("'", "", $this->input->post('access'));
        $final = array(
            'id' => $id,
            'password' => $password,
            'confirm_password' => $confirm_password,
            'name' => $name,
            'access' => $access

        );
        $this->user->save_user($id, $password, $name, $access);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($final));
    }
    public function get_event()
    {
        $data = $this->M_event->get_all_event();
        $final = array();
        foreach ($data->result() as $a) {

            $final[] = array(
                'id' => $a->id,
                'name' => $a->name,
                'venue' => $a->venue,
                'start' => $a->start,
                'end' => $a->end,
                'quota' => $a->quota,
                'picture' => $a->picture,
                'content' => $a->content
            );
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($final));
    }
    function url_event()
    {
        $url = 'http://localhost/Eticket/cms/Api/get_event';
    }
}

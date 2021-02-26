<?php
class Event extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('Administrator');
            redirect($url);
        };
        $this->API = 'http://127.0.0.1/Eticket/cms/';
        $this->load->model('M_event', 'eve');
        $this->load->model('M_user');
        $this->load->library(array('upload', 'Curl'));
        $this->load->helper(array('url', 'security'));
        header('Access-Control-Allow-Origin: *');
    }


    function index()
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->M_user->get_user_login($kode);
        $x['data'] = json_decode($this->curl->simple_get($this->API . '/data-event'), true);
        $this->load->view('V_event', $x);
    }

    function getRoot()
    {
        echo $_SERVER['DOCUMENT_ROOT'];
    }
    function add()
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->M_user->get_user_login($kode);

        $this->load->view('V_add_event', $x);
    }
    function save_event()
    {
        $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . '/Eticket/cms/assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048000000'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '1000'; //tinggi maksimu 1000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $name = str_replace("'", "", $this->security->xss_clean($this->input->post('name')));
                $venue = str_replace("'", "", $this->input->post('venue'));
                $start = str_replace("'", "", $this->input->post('start'));



                $end = str_replace("'", "", $this->input->post('end'));


                $pic = $this->upload->data();
                $picture = "/assets/img/" . $pic['file_name'];
                $content = str_replace("'", "", $this->input->post('content'));
                $quota = str_replace("'", "", $this->input->post('quota'));
                $speaker = str_replace("'", "", $this->input->post('speaker'));
                $moderator = str_replace("'", "", $this->input->post('moderator'));


                $start1 = $start;
                $end1 = $end;

                $venue = $this->security->xss_clean($venue);
                $start1 = $this->security->xss_clean($start1);
                $end1 = $this->security->xss_clean($end1);
                $picture = $this->security->xss_clean($picture);
                $content = $this->security->xss_clean($content);
                $quota = $this->security->xss_clean($quota);
                $speaker = $this->security->xss_clean($speaker);
                $moderator = $this->security->xss_clean($moderator);

                $this->eve->save_event($name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator);
                echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Event <b>' . $name . '</b> Successfully added to database.</div>');
                redirect('Event');
            } else {
                echo $this->session->set_flashdata('m
                sg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $this->upload->display_errors() . '.</div>');
                redirect('Event');
            }
        } else {
            $name = str_replace("'", "", $this->input->post('name'));
            $venue = str_replace("'", "", $this->input->post('venue'));
            $start = str_replace("'", "", $this->input->post('start'));
            $end = str_replace("'", "", $this->input->post('end'));
            $content = str_replace("'", "", $this->input->post('content'));
            $quota = str_replace("'", "", $this->input->post('quota'));
            $speaker = str_replace("'", "", $this->input->post('speaker'));
            $moderator = str_replace("'", "", $this->input->post('moderator'));


            $start1 = $start;
            $end1 = $end;

            $name = $this->security->xss_clean($name);
            $venue = $this->security->xss_clean($venue);
            $start1 = $this->security->xss_clean($start1);
            $end1 = $this->security->xss_clean($end1);
            $content = $this->security->xss_clean($content);
            $quota = $this->security->xss_clean($quota);
            $speaker = $this->security->xss_clean($speaker);
            $moderator = $this->security->xss_clean($moderator);


            $this->eve->save_event1($name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator);
            echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Event <b>' . $name . '</b> Successfully added to database.</div>');
            redirect('Event');
        }
    }

    function update($id)
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->M_user->get_user_login($kode);
        $x['data'] = $this->eve->get($id);
        $this->load->view('V_edit_event', $x);
    }

    function update_event()
    {

        $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . '/Eticket/cms/assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048000000'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '1000'; //tinggi maksimu 1000 px
        // $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $id = str_replace("'", "", $this->input->post('id'));
                $name = str_replace("'", "", $this->input->post('name'));
                $venue = str_replace("'", "", $this->input->post('venue'));
                $start = str_replace("'", "", $this->input->post('start'));
                $end = str_replace("'", "", $this->input->post('end'));
                $pic = $this->upload->data();
                $picture = "/assets/img/" . $pic['file_name'];
                $content = str_replace("'", "", $this->input->post('content'));
                $quota = str_replace("'", "", $this->input->post('quota'));
                $speaker = str_replace("'", "", $this->input->post('speaker'));
                $moderator = str_replace("'", "", $this->input->post('moderator'));

                $start1 = $start;
                $end1 = $end;

                $id = $this->security->xss_clean($id);
                $name = $this->security->xss_clean($name);
                $venue = $this->security->xss_clean($venue);
                $start1 = $this->security->xss_clean($start1);
                $end1 = $this->security->xss_clean($end1);
                $picture = $this->security->xss_clean($picture);
                $content = $this->security->xss_clean($content);
                $quota = $this->security->xss_clean($quota);
                $speaker = $this->security->xss_clean($speaker);
                $moderator = $this->security->xss_clean($moderator);


                $this->eve->update_event($id, $name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator);

                echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Event <b>' . $name . '</b> Successfully update to database.</div>');
                redirect('Event');
            } else {
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $this->upload->display_errors() . '.</div>');
                redirect('Event');
            }
        } else {


            $id = str_replace("'", "", $this->input->post('id'));
            $name = str_replace("'", "", $this->input->post('name'));
            $venue = str_replace("'", "", $this->input->post('venue'));
            $start = str_replace("'", "", $this->input->post('start'));
            $end = str_replace("'", "", $this->input->post('end'));
            $content = str_replace("'", "", $this->input->post('content'));
            $quota = str_replace("'", "", $this->input->post('quota'));
            $speaker = str_replace("'", "", $this->input->post('speaker'));
            $moderator = str_replace("'", "", $this->input->post('moderator'));


            $start1 = $start;
            $end1 = $end;

            $id = $this->security->xss_clean($id);
            $name = $this->security->xss_clean($name);
            $venue = $this->security->xss_clean($venue);
            $start1 = $this->security->xss_clean($start1);
            $end1 = $this->security->xss_clean($end1);
            $content = $this->security->xss_clean($content);
            $quota = $this->security->xss_clean($quota);
            $speaker = $this->security->xss_clean($speaker);
            $moderator = $this->security->xss_clean($moderator);


            $this->eve->update_event1($id, $name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator);
            echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Event <b>' . $name . '</b> Successfully changed in database.</div>');
            redirect('Event');
        }
    }

    function delete_event()
    {
        $id = str_replace("'", "", $this->input->post('id'));
        $name = str_replace("'", "", $this->input->post('name'));

        $id = $this->security->xss_clean($id);
        $name = $this->security->xss_clean($name);
        $this->eve->delete_event($id);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Event <b>' . $name . '</b> Successfully deleted from database.</div>');
        redirect('Event');
    }
}

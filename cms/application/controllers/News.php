<?php
class News extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('Administrator');
            redirect($url);
        };
        $this->load->model('M_news');
        $this->load->model('M_user');
        $this->load->helper(array('url', 'security'));
       $this->load->library(array('session', 'upload'));
    }
    function index()
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->M_user->get_user_login($kode);
        $x['data'] = $this->M_news->get_all();
        $this->load->view('V_news', $x);
        
    }


    function getRoot()
    {
        echo $_SERVER['DOCUMENT_ROOT'];
    }
    function add()
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->M_user->get_user_login($kode);

        $this->load->view('V_add_news', $x);
    }

    function save_news(){

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
                $topic = str_replace("'", "", $this->security->xss_clean($this->input->post('topic')));
                $author = str_replace("'", "", $this->input->post('author'));            

                $pic = $this->upload->data();
                $picture = "/assets/img/" . $pic['file_name'];
                $content = str_replace("'", "", $this->input->post('content'));

                $topic = $this->security->xss_clean($topic);
                $author = $this->security->xss_clean($author);
                $picture = $this->security->xss_clean($picture);
                $content = $this->security->xss_clean($content);

                $this->M_news->save_news($topic, $author, $picture, $content);
                echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>News <b>' . $topic . '</b> Successfully added to database.</div>');
                redirect('News');
            } else {
                echo $this->session->set_flashdata('m
                sg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $this->upload->display_errors() . '.</div>');
                redirect('News');
            }
        } else {
                $topic = str_replace("'", "", $this->security->xss_clean($this->input->post('topic')));
                $author = str_replace("'", "", $this->input->post('author'));
                $date = str_replace("'", "", $this->input->post('date'));
                
                $content = str_replace("'", "", $this->input->post('content'));
                
                $topic = $this->security->xss_clean($topic);
                $author = $this->security->xss_clean($author);
                $date = $this->security->xss_clean($date);
                
                $content = $this->security->xss_clean($content);


           $this->M_news->save_news1($topic, $author, $date, $content);
            echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>News <b>' . $topic . '</b> Successfully added to database.</div>');
            redirect('News');
        }
    }


    function update($id)
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->M_user->get_user_login($kode);
        $x['data'] = $this->M_news->get($id);
        $this->load->view('V_edit_news', $x);
    }

    function update_News()
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
                $id = str_replace("'", "", $this->security->xss_clean($this->input->post('id')));
                $topic = str_replace("'", "", $this->security->xss_clean($this->input->post('topic')));
                $author = str_replace("'", "", $this->input->post('author'));
                

                $pic = $this->upload->data();
                $picture = "/assets/img/" . $pic['file_name'];
                $content = str_replace("'", "", $this->input->post('content'));


                $id = $this->security->xss_clean($id);
                $topic = $this->security->xss_clean($topic);
                $author = $this->security->xss_clean($author);
                $picture = $this->security->xss_clean($picture);
                $content = $this->security->xss_clean($content);


                $this->M_news->update_news($id, $topic, $author, $picture, $content);

                echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>News <b>' . $News . '</b> Successfully update to database.</div>');
                redirect('News');
            } else {
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $this->upload->display_errors() . '.</div>');
                redirect('News');
            }
        } else {


            $id = str_replace("'", "", $this->input->post('id'));
            $topic = str_replace("'", "", $this->security->xss_clean($this->input->post('topic')));
                $author = str_replace("'", "", $this->input->post('author'));
                $date = str_replace("'", "", $this->input->post('date'));

                $pic = $this->upload->data();
                $picture = "/assets/img/" . $pic['file_name'];
                $content = str_replace("'", "", $this->input->post('content'));


                $id = $this->security->xss_clean($id);
                $topic = $this->security->xss_clean($topic);
                $author = $this->security->xss_clean($author);
                $date = $this->security->xss_clean($date);
                $picture = $this->security->xss_clean($picture);
                $content = $this->security->xss_clean($content);



            $this->M_news->update_news1($id, $topic, $author, $date, $content);
            echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>News <b>' . $name . '</b> Successfully changed in database.</div>');
            redirect('News');
        }
    }

    function delete_news()
    {
        $id = str_replace("'", "", $this->input->post('id'));
        $topic = str_replace("'", "", $this->input->post('topic'));

        $id = $this->security->xss_clean($id);
        $topic = $this->security->xss_clean($topic);
        $this->M_news->delete_news($id);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>News <b>' . $topic . '</b> Successfully deleted from database.</div>');
        redirect('News');
    }
  
}

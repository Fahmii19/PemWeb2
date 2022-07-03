<?php
class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function login_user($username, $password)
    {
        $query = $this->db->get_where('account', array('username' => $username));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if ($data_user->password) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('password', $password);
                $this->session->set_userdata('email', $data_user->email);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('login');
        }
    }
}

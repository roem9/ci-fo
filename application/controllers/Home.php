<?php
class Home extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Home_model');

        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function index(){
        if($_POST){
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
        } else {
            $bulan = date('n');
            $tahun = date('Y');
        }

        // echo ($bulan.  $tahun);
        $data['header'] = 'Home';
        $data['title'] = 'Home';
        $data['bulan'] = [ 
            ["id" => "1","bulan" => "Januari"], ["id" => "2","bulan" => "Februari"], ["id" => "3","bulan" => "Maret"], ["id" => "4","bulan" => "April"], ["id" => "5","bulan" => "Mei"], ["id" => "6","bulan" => "Juni"], ["id" => "7","bulan" => "Juli"], ["id" => "8","bulan" => "Agustus"], ["id" => "9","bulan" => "September"], ["id" => "10","bulan" => "Oktober"], ["id" => "11","bulan" => "November"], ["id" => "12","bulan" => "Desember"]
        ];
        $data['month'] = $bulan;
        $data['year'] = $tahun;
        
        $data['peserta']['wanita'] = COUNT($this->Home_model->pesertaJk($bulan, $tahun, "Wanita"));
        $data['peserta']['pria'] = COUNT($this->Home_model->pesertaJk($bulan, $tahun, "Pria"));
        
        $pendidikan = $this->Home_model->getPendidikan($bulan, $tahun);
        $data['pendidikan'] = [];
        foreach ($pendidikan as $key => $pendidikan) {
            $data['pendidikan'][$key] = $pendidikan;
            $data['pendidikan'][$key]['peserta'] = COUNT($this->Home_model->pendidikan($bulan, $tahun, $pendidikan['pendidikan']));
        }
        
        $pekerjaan = $this->Home_model->getPekerjaan($bulan, $tahun);
        $data['pekerjaan'] = [];
        foreach ($pekerjaan as $key => $pekerjaan) {
            $data['pekerjaan'][$key] = $pekerjaan;
            $data['pekerjaan'][$key]['peserta'] = COUNT($this->Home_model->pekerjaan($bulan, $tahun, $pekerjaan['pekerjaan']));
        }
        
        $program = $this->Home_model->getProgram($bulan, $tahun);
        $data['program'] = [];
        foreach ($program as $key => $program) {
            $data['program'][$key] = $program;
            $data['program'][$key]['peserta'] = COUNT($this->Home_model->pesertaProgram($bulan, $tahun, $program['program']));
        }
        
        $data['peserta']['total'] = $data['peserta']['wanita'] + $data['peserta']['pria'];
        $data['kelas'] = COUNT($this->Home_model->jumlahKelas($bulan, $tahun));

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("home/index", $data);
        $this->load->view("templates/footer");
    }
}
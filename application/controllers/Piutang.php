<?php

class Piutang extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Piutang_model');
        
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function pvKhusus(){
        $data['header'] = 'Piutang Kelas Pv Khusus';
        $data['title'] = 'Piutang Kelas Pv Khusus';
        $data['tabs'] = 'pvkhusus';
        $data['piutang'] = $this->Piutang_model->getPiutangKelasByTipe('pv khusus');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('modal/modal_invoice');
        $this->load->view('piutang/piutang_kelas', $data);
        $this->load->view('templates/footer');
    }
    
    public function pvLuar(){
        $data['header'] = 'Piutang Kelas Pv Luar';
        $data['title'] = 'Piutang Kelas Pv Luar';
        $data['tabs'] = 'pvluar';
        $data['piutang'] = $this->Piutang_model->getPiutangKelasByTipe('pv luar');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('modal/modal_invoice');
        $this->load->view('piutang/piutang_kelas', $data);
        $this->load->view('templates/footer');
    }
    
    public function instansi(){
        $data['header'] = 'Piutang Kelas Instansi';
        $data['title'] = 'Piutang Kelas Instansi';
        $data['tabs'] = 'instansi';
        $data['piutang'] = $this->Piutang_model->getPiutangKelasByTipe('instansi');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('modal/modal_invoice');
        $this->load->view('piutang/piutang_kelas', $data);
        $this->load->view('templates/footer');
    }
    
    public function event(){
        $data['header'] = 'Piutang Kelas Event';
        $data['title'] = 'Piutang Kelas Event';
        $data['tabs'] = 'event';
        $data['piutang'] = $this->Piutang_model->getPiutangKelasByTipe('event');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('modal/modal_invoice');
        $this->load->view('piutang/piutang_kelas', $data);
        $this->load->view('templates/footer');
    }
    
    public function kpq(){
        $data['header'] = 'Piutang KPQ';
        $data['title'] = 'Piutang KPQ';
        $data['tabs'] = 'kpq';
        $data['piutang'] = $this->Piutang_model->getPiutangKpq();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('modal/modal_invoice');
        $this->load->view('piutang/piutang_kpq', $data);
        $this->load->view('templates/footer');
    }

    public function reguler(){
        $data['header'] = 'Piutang Peserta Reguler';
        $data['title'] = 'Piutang Peserta Reguler';
        $data['tabs'] = 'reguler';
        $data['piutang'] = $this->Piutang_model->getPiutangPeserta();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('modal/modal_invoice');
        $this->load->view('piutang/piutang_peserta', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambahPiutangPeserta(){
        $data['header'] = 'Tambah Piutang Peserta Reguler';
        $data['title'] = 'Tambah Piutang Peserta Reguler';
        $data['tabs'] = 'peserta';
        $data['pengajar'] = $this->Piutang_model->getPengajarReguler();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('piutang/form_piutang_peserta', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambahPiutangKelas(){
        $data['header'] = 'Tambah Piutang Kelas Private';
        $data['title'] = 'Tambah Piutang Kelas Private';
        $data['tabs'] = 'kelas';
        $data['pengajar'] = $this->Piutang_model->getAllPengajar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('piutang/form_piutang_kelas', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambahPiutangKpq(){
        $data['header'] = 'Tambah Piutang KPQ';
        $data['title'] = 'Tambah Piutang KPQ';
        $data['tabs'] = 'kpq';
        $data['pengajar'] = $this->Piutang_model->getAllPengajar();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('piutang/form_piutang_kpq', $data);
        $this->load->view('templates/footer');
    }

    public function getPesertaRegulerByPengajar(){
        $nip = $this->input->post('nip',TRUE);
        $data = $this->Piutang_model->getPesertaRegulerByPengajar($nip);
        echo json_encode($data);
    }

    public function getKoorByPengajar(){
        $nip = $this->input->post('nip',TRUE);
        $data = $this->Piutang_model->getKoorByPengajar($nip);
        echo json_encode($data);
    }

    public function addPiutangKelas(){
        $id_kelas = $this->input->post('id_kelas', TRUE);
        $id = $this->Piutang_model->getIdInvoice();
        $nama = $this->Piutang_model->getNamaKoor($id_kelas);

        $id = $id['id_invoice'];

        if($id == 0){
            $id_invoice = 1;
        } else {
            $id_invoice = $id+1;
        }

        $this->Piutang_model->tambahPiutangKelas($id_invoice, $nama['nama_peserta']);
        
        $this->session->set_flashdata('piutang', 'ditambahkan');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addPiutangPeserta(){
        $id_peserta = $this->input->post('id_peserta', TRUE);
        $id = $this->Piutang_model->getIdInvoice();
        $nama = $this->Piutang_model->getNamaPeserta($id_peserta);

        $id = $id['id_invoice'];

        if($id == 0){
            $id_invoice = 1;
        } else {
            $id_invoice = $id+1;
        }

        $this->Piutang_model->tambahPiutangPeserta($id_invoice, $nama['nama_peserta']);
        
        $this->session->set_flashdata('piutang', 'ditambahkan');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addPiutangKpq(){
        $nip = $this->input->post("nip", TRUE);
        $id = $this->Piutang_model->getIdInvoice();
        $nama = $this->Piutang_model->getNamaPengajar($nip);

        $id = $id['id_invoice'];

        if($id == 0){
            $id_invoice = 1;
        } else {
            $id_invoice = $id+1;
        }

        $this->Piutang_model->tambahPiutangKpq($id_invoice, $nama['nama_kpq']);
        
        $this->session->set_flashdata('piutang', 'ditambahkan');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getInvoiceKelas(){
        $id_kelas = $this->input->post('id_kelas',TRUE);
        $data = $this->Piutang_model->getInvoiceKelas($id_kelas);
        echo json_encode($data);
    }
    
    public function getInvoicePeserta(){
        $id_peserta = $this->input->post('id_peserta',TRUE);
        $data = $this->Piutang_model->getInvoicePeserta($id_peserta);
        echo json_encode($data);
    }
    public function getInvoiceKpq(){
        $nip = $this->input->post('nip',TRUE);
        $data = $this->Piutang_model->getInvoiceKpq($nip);
        echo json_encode($data);
    }

    public function history($id_kelas){
        $data['header'] = 'Riwayat Piutang';
        $data['title'] = 'Riwayat Piutang';
        $data['tabs'] = 'pvkhusus';
        // $data['piutang'] = $this->Piutang_model->('pv khusus');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('piutang/historykelas', $data);
        $this->load->view('templates/footer');
    }

    public function hapusInvoice(){
        $id_invoice = $this->input->post('id_invoice');
        $this->Piutang_model->hapusInvoice($id_invoice);
        $this->session->set_flashdata('piutang', 'dihapus');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
<?php
class Dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_form_datasiswa');
    }
    public function cetak()
    {

        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|min_length[3]',
            [
                'required' => 'Nama Siswa Harus diisi',
                'min_lenght' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'Nis',
            'required|min_length[3]',
            [
                'required' => 'Nis Harus diisi',
                'min_lenght' => 'Nis terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required|min_length[3]',
            [
                'required' => 'Kelas Harus diisi',
                'min_lenght' => 'Kelas terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'tgllahir',
            'Tanggal Lahir',
            'required|min_length[3]',
            [
                'required' => 'Tanggal Lahir Harus diisi',
                'min_lenght' => 'Tanggal Lahir terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[3]',
            [
                'required' => 'Alamat Harus diisi',
                'min_lenght' => 'Alamat terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('v_form_datasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgllahir' => $this->input->post('tgllahir'),
                'alamat' => $this->input->post('alamat'),
                'Jenis_kitelamin' => $this->input->post('Jenis_kelamin'),
                'agama' => $this->input->post('agama'),
            ];
            $this->load->view('v_data_datasiswa', $data);
        }
    }
}
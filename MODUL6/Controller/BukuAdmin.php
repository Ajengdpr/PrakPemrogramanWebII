<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class BukuAdmin extends BaseController
{
    public function index()
    {
        $bukuModel = new BukuModel();
        $data['buku'] = $bukuModel->findAll();
        echo view('admin_list_buku', $data);
    }

    public function create()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $bukuModel = new BukuModel();
            $bukuModel->insert([
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect()->to(base_url('admin/buku'));
        }

        $data['validation'] = $validation;
        echo view('admin_create_buku', $data);
    }

    public function edit($id)
    {
        $bukuModel = new BukuModel();
        $data['buku'] = $bukuModel->find($id);
        {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'judul' => 'required|string',
                'penulis' => 'required|string',
                'penerbit' => 'required|string',
                'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]'
            ]);

            $isDataValid = $validation->withRequest($this->request)->run();

            if ($isDataValid) {
                $bukuModel->update($id, [
                    "judul" => $this->request->getPost('judul'),
                    "penulis" => $this->request->getPost('penulis'),
                    "penerbit" => $this->request->getPost('penerbit'),
                    "tahun_terbit" => $this->request->getPost('tahun_terbit')
                ]);
                return redirect()->to(base_url('admin/buku'));
            }
        }
        echo view('admin_edit_buku', $data);
    }

    public function delete($id)
    {
        $bukuModel = new BukuModel();
        $bukuModel->delete($id);
        return redirect()->to(base_url('admin/buku'));
    }
}
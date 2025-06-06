<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Berita;
use CodeIgniter\HTTP\ResponseInterface;

class BeritaController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Berita();
        $this->helpers = ['form', 'url'];
    }
    public function index()
    {
        $search = $this->request->getGet('search');
        $sort = $this->request->getGet('sort') ?? 'latest';
        $limit = $this->request->getGet('limit') ?? 10;

        $builder = $this->model->builder();

        if ($search) {
            $builder->like('judul', $search)->orLike('isi', $search);
        }

        if ($sort === 'oldest') {
            $builder->orderBy('created_at', 'ASC');
        } else {
            $builder->orderBy('created_at', 'DESC');
        }

        $data = [
            'berita' => $this->model->paginate($limit),
            'pager' => $this->model->pager,
            'search' => $search,
            'sort' => $sort,
            'limit' => $limit,
        ];
        return view('admin/berita', $data);
    }

    public function addOrEdit($id = null)
    {
        if ($id) {
            $data['berita'] = $this->model->find($id);

            if (!$data['berita']) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Berita not found');
            }
        } else {
            $data['berita'] = [];
        }
        return view('admin/addberita', $data);
    }

    public function saveBerita($id = null)
    {
        $validationRule = [
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required|min_length[3]|max_length[255]',
                'errors' => [
                    'required' => 'Judul Wajib Di Isi.',
                    'min_length' => 'Judul minimal 3 Karakter.',
                    'max_length' => 'Judul maksimal 255 Karakter.',
                ],
            ],
            'isi' => [
                'label' => 'Isi',
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Isi Wajib Di Isi.',
                    'min_length' => 'Isi minimal 10 Karakter.',
                ],
            ],
            'image' => [
                'label' => 'Image',
                'rules' => 'if_exist|uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]',
                'errors' => [
                    'uploaded' => 'Tolong Upload Gambar.',
                    'is_image' => 'File Harus Berupa Gambar.',
                    'mime_in' => 'Format gambar harus jpg, jpeg, atau png.',
                    'max_size' => 'Ukuran gambar maksimal 5MB.',
                ],
            ],
        ];

        if (!$this->validate($validationRule)) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');

        $img = $this->request->getFile('image');
        $data = [
            'judul' => $judul,
            'isi' => $isi,
        ];
        $currentDateTime = date('Y-m-d H:i:s');
        if ($id) {
            // Editing an existing record
            $berita = $this->model->find($id);
            if (!$berita) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.')->withInput();
            }

            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/uploads/berita', $newName);
                $data['image'] = $newName;

                // Delete old image if a new image was uploaded
                if (!empty($berita['image'])) {
                    unlink(ROOTPATH . 'public/uploads/berita/' . $berita['image']);
                }
            } else {
                // Keep the old image if no new image is uploaded
                $data['image'] = $berita['image'];
            }
            $data['updated_at'] = $currentDateTime;
            $this->model->update($id, $data);
            return redirect()->to(base_url('admin/berita'))->with('message', 'Data berhasil diupdate.');
        } else {
            // Adding a new record
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/uploads/berita', $newName);
                $data['image'] = $newName;
            }
            $data['created_at'] = $currentDateTime;
            $this->model->save($data);
            return redirect()->to(base_url('admin/berita'))->with('message', 'Data berhasil disimpan.');
        }
    }

    public function delete($id)
    {
        $data['berita'] = $this->model->find($id);
        if ($data['berita']['image']) {
            // Delete the image file if it exists
            $imagePath = ROOTPATH . 'public/uploads/berita/' . $data['berita']['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Delete the record from the database
            $this->model->delete($id);
        }
        if ($this->model->delete($id)) {
            return redirect()->to(base_url('admin/berita'))->with('message', 'Data berhasil dihapus.');
        } else {
            return redirect()->to(base_url('admin/berita'))->with('error', 'Data tidak ditemukan atau gagal dihapus.');
        }
    }
}

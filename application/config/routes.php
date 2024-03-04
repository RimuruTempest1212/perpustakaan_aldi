<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['kategoriBuku'] = 'Buku/kategori';
$route['proses_input_data'] = 'Buku/proses_insert_buku';
$route['update_buku'] = 'Buku/update_buku_masuk';

#admin
$route['admin'] = 'admin/Dashboard/home';
$route['charts'] = 'admin/Dashboard/charts';
$route['card'] = 'admin/Dashboard/card';
$route['daftarbuku'] = 'admin/Dashboard/daftarbuku';
$route['pinjamanbuku'] = 'admin/Peminjaman/daftarpinjaman';
$route['pinjaman_proses'] = 'admin/Peminjaman/pinjaman_aksi';
$route['delete_pinjaman/(:any)'] = 'admin/Peminjaman/delete_pinjaman/$1';
$route['update_pinjaman'] = 'admin/Peminjaman/pinjaman_aksi_update';
$route['data_user'] = 'admin/Data_User';
$route['kategori'] = 'admin/kategori';


#Data Buku
$route['insert_buku_proses'] = 'Buku/insert_buku_NEW';
$route['EditBuku'] = 'Buku/halaman_edit';
$route['databuku'] = 'Buku/index';
$route['TambahBuku'] = 'Buku/tambah_buku';
$route['update_buku'] = 'Buku/Update_Buku';

#Auth
$route['login'] = 'login';
$route['register'] = 'auth/register';

#User Pages
$route['home'] = 'user/User/home';
$route['logout'] = 'user/User/logout';

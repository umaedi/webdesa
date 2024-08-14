<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\KategoriPengaduan;
use App\Models\Kategorisuket;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nik'           => '1602205503020002',
            'nama'          => 'UMAEDI',
            'ttl'           => 'Way Kanan, 17 Agustus 1998',
            'jenis_kelamin' => 'Laki-Laki',
            'status'        => 'Lajang',
            'pekerjaan'     => 'Web Developer',
            'agama'         => 'Islam',
            'alamat'        => 'Jalan sama aku nikah sama dia',
            'no_tlp'        => '085741492045',
            'password'      => Hash::make('admin123'),
            'role'          => 'admin',
        ]);

        User::create([
            'nik'           => '1741010249',
            'nama'          => 'Nesya',
            'ttl'           => 'Way Kanan, 17 Agustus 1998',
            'jenis_kelamin' => 'Perempuan',
            'status'        => 'Lajang',
            'pekerjaan'     => 'Mahasiswa',
            'agama'         => 'Islam',
            'alamat'        => 'Jalan sama aku nikah sama dia',
            'no_tlp'        => '085741492046',
            'password'      => Hash::make('user123'),
            'role'          => 'user',
        ]);

        $data = [
            ['kategori_pengaduan' => 'Pelayanan'],
            ['kategori_pengaduan' => 'Pembangunan'],
            ['kategori_pengaduan' => 'Lainnya'],
        ];

        foreach ($data as $value) {
            KategoriPengaduan::create($value);
        }

        $kategori = [
            ['kategori_suket'    => 'Surat Keterangan Usaha', 'slug' => 'surat-keterangan-usaha'],
            ['kategori_suket'    => 'Surat Kehilangan', 'slug' => 'surat-kehilangan'],
            ['kategori_suket'    => 'Surat Keterangan Domisili', 'slug' => 'surat-keterangan-domisili'],
            ['kategori_suket'    => 'Surat Keterangan Nikah', 'slug' => 'surat-keterangan-nikah'],
            ['kategori_suket'    => 'Surat Keterangan Tidak Mampu', 'slug' => 'surat-keterangan-tidak-mampu'],
        ];
        
        foreach ( $kategori  as $value) {
            Kategorisuket::create($value);
        }

        $category = [
            ['name' => 'Pelayanan', 'slug' => 'pelayanan'],
            ['name' => 'Pengumuman', 'slug' => 'pengumuman'],
        ];

        foreach ($category as $value) {
            # code...
            Category::create($value);
        }

        $post = [
                [
                    'judul' => 'What is Lorem Ipsum',
                    'category_id'   => '1',
                    'user_id'   => '1',
                    'slug'  => 'what-is-lorem-ipsum-1',
                    'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                ],
                [
                    'judul' => 'What is Lorem Ipsum',
                    'category_id'   => '1',
                    'user_id'   => '1',
                    'slug'  => 'what-is-lorem-ipsum-2',
                    'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                ],
                [
                    'judul' => 'What is Lorem Ipsum',
                    'category_id'   => '1',
                    'user_id'   => '1',
                    'slug'  => 'what-is-lorem-ipsum-3',
                    'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                ],
                [
                    'judul' => 'What is Lorem Ipsum',
                    'category_id'   => '2',
                    'user_id'   => '1',
                    'slug'  => 'what-is-lorem-ipsum-4',
                    'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                ],
                [
                    'judul' => 'What is Lorem Ipsum',
                    'category_id'   => '2',
                    'user_id'   => '1',
                    'slug'  => 'what-is-lorem-ipsum-5',
                    'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                ],
                [
                    'judul' => 'What is Lorem Ipsum',
                    'category_id'   => '2',
                    'user_id'   => '1',
                    'slug'  => 'what-is-lorem-ipsum-6',
                    'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                ],
            ];

            foreach ($post as $value) {
                # code...
                Post::create($value);
            }
    }
}

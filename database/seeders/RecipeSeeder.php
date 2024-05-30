<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert([
            'nama' => 'Klepon',
            'deskripsi' => 'Camilan lezat dengan tepung ketan manis dan gula merah.',
            'kategori' => 'dessert',
            'gambar_1' => 'klepon1.png',
            'gambar_2' => 'klepon2.png',
            'cara_membuat' => 'Uleni bahan bola-bola sampe bisa dipulung, jangan terlalu lembek nanti kleponnya gembos. Kalo terlalu kering akan gampang bocor gula merahnya.
                                | Isi bagian tengahnya dengan gula merah, sisir, lalu bentuk bola-bola, sisihkan.
                                | Rebus air sampe mendidih, masukkan klepon, jika sudah mateng dia mengambang.
                                | Gulingkan di kelapa parut, dan tidak perlu di beri garam.
                                | Sajikan dan siap di santap.',
            'bahan_bahan' => '250 gr Tepung ketan
                                | 50 gr Tepung beras
                                | Secukupnya Air, sampe adonan bisa dipulung bulet
                                | Sesuai selera Gula merah, disisir sesuai selera aja
                                | Kelapa parut kira2 aja aku kukus dulu 20 menitan biar ga gampang basi',
            'id_user' => '1'
        ]);

        DB::table('recipes')->insert([
            'nama' => 'Pempek',
            'deskripsi' => 'Cita rasa balutan kulit ikan yang kenyal dan isian yang melimpah.',
            'kategori' => 'traditional',
            'gambar_1' => 'pempek1.png',
            'gambar_2' => 'pempek2.png',
            'cara_membuat' => 'Buat saus cukonya. Haluskan bawang putih dan cabai beri, sedikit air. Masukkan ke dalam panci semua bahan saus kecuali gula pasir dan garam. Masak sampai gula merah larut.
                                | Masukkan gula dan garam. Masak dengan api kecil selama 15 menit. Angkat dan saring.
                                | Blender ikan sampai halus. Masukkan ke dalam baskom aduk dengan 300 ml air.
                                | Blender bawang putih dengan sedikit air. Masukkan ke adonan ikan. Tambahkan juga putih telur dan semua bumbunya.
                                | Aduk sampai rata. Tambahkan tepung tapiokanya sedikit demi sedikit sambil diaduk sampai rata.
                                | Bentuk adonan memanjang dengan melumuri papan dan tangan dengan tepung tapioka.
                                | Rebus sampai mengapung. Tambahkan bawang merah dan lada pada separuh adonan. Kemudian saya goreng.
                                ',
            'bahan_bahan' => '500 gr daging ikan tenggiri
                                | 600 gr tepung tapioka
                                | 300 ml air
                                | 1 bongkol bawang putih
                                | 2 butir putih telur
                                | 3 sdm gula pasir
                                | 40 gr garam
                                | 20 gr micin
                                | 1 butir telur kocok ',
            'nama_bahan_bahan_lain' => 'bahan saus cuko',
            'bahan_bahan_lain' => '500 ml air 
                                    | 1 sdm cuka 
                                    | 2 sdm gula 
                                    | 2 sdt garam 
                                    | 250 gr gula merah 
                                    | 5 buah cabai rawit merah 
                                    | 3 buah cabai keriting 
                                    | 3 siung bawang putih 
                                    | 1 sdt kaldu jamur 
                                    | 1 sdm asam Jawa
                                    ',
            'id_user' => '1'
        ]);
    }
}

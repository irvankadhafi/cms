<?php

use App\Home;
use Illuminate\Database\Seeder;

class HomeLandingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new Home;
        $home->logo1 = "/img/header-img3.png";
        $home->title = "Poros Juang";
        $home->deskripsi = "BEM KEMA POLBAN";
        $home->visi = "<p><strong>BEM KEMA POLBAN</strong> sebagai poros pergerakan yang profesional untuk Almamater, bangsa, dan negara.</p>";
        $home->misi = "<h3>Poros Stabilitas Kabinet</h3>
<p>Membentuk internal kabinet yang profesional dengan asas kekeluargaan.</p>
<h3>Poros Pelayanan dan Pengabdian</h3>
<p>Mengoptimalkan pelayanan advokasi mahasiswa POLBAN serta pengabdian masyarakat yang partisipatif dan kolaboratif dengan orientasi kemanfaatan.</p>
<h3>Poros Eskalasi</h3>
<p>Mengawal serta menyikapi isu luar dalam kampus serta mengupayakan pembentukan opini mahasiswa POLBAN dan masyarakat.</p>
<h3>Poros Kolaborasi</h3>
<p>Menjalin komunikasi serta kerjasama yang berkelanjutan dengan pihak luar dan dalam kampus</p>
<h3>Poros Pengembangan</h3>
<p>Memberikan fasilitas dalam kegiatan keilmuan serta minat dan bakat mahasiswa POLBAN.</p>";
        $home->save();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\UrlGenerator;

class Member extends Model {

    protected $table = 'cakru_member';

    public function link()
    /* convert name to link */
    {
    	$s = $this->name;
    	$s = strtolower($s);
    	$s = str_replace(" ", "-", $s);

    	return $s;
    }

    public function geturl()
    /* return url for member */
    {
        return url('/') . '/member/' . $this->link();
    }

    public function getprofpicurl1()
    /* return url for member prof pic */
    {
        return url('/') . '/public/img/profpic/' . $this->nim . '-1.jpg';
    }

    public function getprofpicurl2()
    /* return url for member prof pic */
    {
        return url('/') . '/public/img/profpic/' . $this->nim . '-2.jpg';
    }

    public function getprodi() {
    	$nim = $this->nim;
    	
    	$prodi = substr($nim,0,3);
    	if ($prodi == '101') $prodi = 'Matematika';
		else if ($prodi == '102') $prodi = 'Fisika';
		else if ($prodi == '103') $prodi = 'Astronomi';
		else if ($prodi == '104') $prodi = 'Mikrobiologi';
		else if ($prodi == '105') $prodi = 'Kimia';
		else if ($prodi == '106') $prodi = 'Biologi';
		else if ($prodi == '107') $prodi = 'Sains dan Teknologi Farmasi';
		else if ($prodi == '112') $prodi = 'Rekayasa Hayati';
		else if ($prodi == '114') $prodi = 'Rekayasa Pertanian';
		else if ($prodi == '115') $prodi = 'Rekayasa Kehutanan';
		else if ($prodi == '116') $prodi = 'Farmasi Klinik dan Komunitas';
		else if ($prodi == '119') $prodi = 'Teknologi Pasca Panen';
		else if ($prodi == '120') $prodi = 'Teknik Geologi';
		else if ($prodi == '121') $prodi = 'Teknik Pertambangan';
		else if ($prodi == '122') $prodi = 'Teknik Perminyakan';
		else if ($prodi == '123') $prodi = 'Teknik Geofisika';
		else if ($prodi == '125') $prodi = 'Teknik Metalurgi';
		else if ($prodi == '128') $prodi = 'Meteorologi';
		else if ($prodi == '129') $prodi = 'Oseanografi';
		else if ($prodi == '130') $prodi = 'Teknik Kimia';
		else if ($prodi == '131') $prodi = 'Teknik Mesin';
		else if ($prodi == '132') $prodi = 'Teknik Elektro';
		else if ($prodi == '133') $prodi = 'Teknik Fisika';
		else if ($prodi == '134') $prodi = 'Teknik Industri';
		else if ($prodi == '135') $prodi = 'Teknik Informatika';
		else if ($prodi == '136') $prodi = 'Aeronotika dan Astronotika';
		else if ($prodi == '137') $prodi = 'Teknik Material';
		else if ($prodi == '143') $prodi = 'Teknik Pangan';
		else if ($prodi == '144') $prodi = 'Manajemen Rekayasa Industri';
		else if ($prodi == '145') $prodi = 'Teknk Bioenergi dan Kemurgi';
		else if ($prodi == '150') $prodi = 'Teknik Sipil';
		else if ($prodi == '151') $prodi = 'Teknik Geodesi dan Geomatika';
		else if ($prodi == '152') $prodi = 'Arsitektur';
		else if ($prodi == '153') $prodi = 'Teknik Lingkungan';
		else if ($prodi == '154') $prodi = 'Perencanaan Wilayah dan Kota';
		else if ($prodi == '155') $prodi = 'Teknik Kelautan';
		else if ($prodi == '157') $prodi = 'Rekayasa Infrastruktur Lingkungan';
		else if ($prodi == '158') $prodi = 'Teknik dan Pengolahan Sumber Daya Air';
		else if ($prodi == '160') $prodi = 'Tahap Tahun Pertama FMIPA';
		else if ($prodi == '161') $prodi = 'Tahap Tahun Pertama SITH-S';
		else if ($prodi == '162') $prodi = 'Tahap Tahun Pertama SF';
		else if ($prodi == '163') $prodi = 'Tahap Tahun Pertama FITB';
		else if ($prodi == '164') $prodi = 'Tahap Tahun Pertama FTTM';
		else if ($prodi == '165') $prodi = 'Tahap Tahun Pertama STEI';
		else if ($prodi == '166') $prodi = 'Tahap Tahun Pertama FTSL';
		else if ($prodi == '167') $prodi = 'Tahap Tahun Pertama FTI';
		else if ($prodi == '168') $prodi = 'Tahap Tahun Pertama FSRD';
		else if ($prodi == '169') $prodi = 'Tahap Tahun Pertama FTMD';
		else if ($prodi == '170') $prodi = 'Seni Rupa';
		else if ($prodi == '172') $prodi = 'Kriya';
		else if ($prodi == '173') $prodi = 'Desain Interior';
		else if ($prodi == '174') $prodi = 'Desain Komunikasi Visual';
		else if ($prodi == '175') $prodi = 'Desain Produk';
		else if ($prodi == '180') $prodi = 'Teknik Tenaga Listrik';
		else if ($prodi == '181') $prodi = 'Teknik Telekomunikasi';
		else if ($prodi == '182') $prodi = 'Sistem Teknologi dan Informasi';
		else if ($prodi == '183') $prodi = 'Teknik Biomedis';
		else if ($prodi == '190') $prodi = 'Manajemen';
		else if ($prodi == '192') $prodi = 'Kewirausahaan';
		else if ($prodi == '197') $prodi = 'Tahap Tahun Pertama SBM';
		else if ($prodi == '198') $prodi = 'Tahap Tahun Pertama SITH-R';
		else if ($prodi == '199') $prodi = 'Tahap Tahun Pertama SAPPK';
		else $prodi = 'undefined : ' . $prodi;

		return $prodi;
    }

}

?>
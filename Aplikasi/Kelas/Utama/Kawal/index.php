<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Index extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##------------------------------------------------------------------------------------------
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajukAtas = 'mini social network';//namaClass($this);
		$this->papar->linkCss = URL . 'sumber/rangka-dawai/massive';
		$this->papar->linkJs = URL . 'sumber/rangka-dawai/massive';
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan2($this->_folder,'index',$noInclude=0);
	}
##------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##------------------------------------------------------------------------------------------
public function paparKandungan2($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=6);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
##------------------------------------------------------------------------------------------
	public function template()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Set pemboleubah utama
		$this->papar->senarai = $this->tanya->pilihTajuk();
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu

		# Pergi papar kandungan
		$fail = array('template');
		$this->paparKandungan($this->_folder,$fail[0],$noInclude=0);
	}
##------------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
	function login($user = null)
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '$user = ' . $user . '';
		$this->papar->tajukAtas = 'mini social network';//namaClass($this);
		$this->papar->linkCss = URL . 'sumber/rangka-dawai/massive';
		$this->papar->linkJs = URL . 'sumber/rangka-dawai/massive';

		# Pergi papar kandungan
		$fail = array('login','login_automatik');
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan2($this->_folder,$fail[0],$noInclude=0); # $noInclude=0//*/
	}
#------------------------------------------------------------------------------------------
	function register()
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '$user = ' . $user . '';
		$this->papar->tajukAtas = 'mini social network';//namaClass($this);
		$this->papar->linkCss = URL . 'sumber/rangka-dawai/massive';
		$this->papar->linkJs = URL . 'sumber/rangka-dawai/massive';

		# Pergi papar kandungan
		$fail = array('register','login_automatik');
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan2($this->_folder,$fail[0],$noInclude=0); # $noInclude=0//*/
	}
#------------------------------------------------------------------------------------------
	function login_automatik($user)
	{
		# Set pemboleubah utama
		$this->papar->nama = $user; # dapatkan nama pengguna
		$this->papar->IP = dpt_ip(); # dapatkan senarai IP yang dibenarkan
		$fail = array('login','login_automatik');

		# Pergi papar kandungan
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan($this->_folder,$fail[0],$noInclude=0); # $noInclude=0
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
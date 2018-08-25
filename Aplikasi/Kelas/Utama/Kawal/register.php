<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Register extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##-----------------------------------------------------------------------------------------
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index', $noInclude=0);
	}
##-----------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##-----------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
##-----------------------------------------------------------------------------------------
	public function semakRujuk($senarai)
	{
		//echo '<pre>$senarai:<br>';
		print_r($senarai);
		//echo '</pre>|';//*/
	}
##-----------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================	
	public function username()
	{
		//$this->semakPembolehubah($_POST);
		$this->registerid();
	}
#-------------------------------------------------------------------------------------------
	function register()
	{
		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan('index', 'register');
	}
#------------------------------------------------------------------------------------------
	function registerid()
	{
		# Set pemboleubah utama
		$myTable = 'users';
		$senarai = array($myTable);
		# Bentuk tatasusunan
		$posmen = $this->tanya->semakPOST($senarai, $_POST);
		$senaraiData = $this->tanya->ubahPosmen($posmen, $myTable);
		# sql insert
		$medan = '`pengguna`,`email`,`katalaluan`,`paras`,`notelefon`';
		$medan2 = array(0=>':0',1=>':1',2=>':2',
		3=>':3',4=>':4');
		//$this->tanya->tambahSqlBanyakNilai($myTable, $medan, $senaraiData); 
		//$this->tanya->tambahBanyakNilai($myTable, $medan, $medan2, $senaraiData); 
		$this->tanya->tambahPDOBanyakNilai($myTable, $medan, $medan2, $senaraiData); 
		//$this->log_sql($myTable, $medan, $senaraiData);
		# Semak data
			//echo '<pre>$_POST='; print_r($_POST) . '</pre>';
			//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
			//echo '<pre>$senaraiData='; print_r($senaraiData) . '</pre>';

		# Pergi papar kandungan
		//echo '<br>location: ' . URL . $this->_folder . '/rangkabaru/selesai';
		//header('location: ' . URL . ''); //*/
	}
#------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------
#==========================================================================================
}
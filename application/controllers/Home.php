<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// nanti ini akan menggunakan kelas model untuk meload data dari db.
		// yang terpenting sekarang adalah kita tau bagaimana format data yang akan kita kirimkan ke view, ini akan mempermudah pengerjaaan model nantinya
		$data  = array(
			'slogan' => "Less <span>pollution</span> <br>  is the best<span> solution</span>.",
			'contents' =>  [
				["judul"=>"Judul 1","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias quam unde assumenda magnam! Doloribus ad neque, nisi adipisci nobis, dolorum officiis illum est praesentium. Ipsa eos, accusantium corrupti earum.","media"=>"static/img/hero.jpg","link"=>"/blog/judul1"],
				["judul"=>"Judul 2","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias quam unde assumenda magnam! Doloribus ad neque, nisi adipisci nobis, dolorum officiis illum est praesentium. Ipsa eos, accusantium corrupti earum.","media"=>"static/img/hero2.jpg","link"=>"/blog/judul2"],
				["judul"=>"Judul 3","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias quam unde assumenda magnam! Doloribus ad neque, nisi adipisci nobis, dolorum officiis illum est praesentium. Ipsa eos, accusantium corrupti earum.","media"=>"static/img/hero3.jpg","link"=>"/blog/judul3"]
			],

			'reports'=>[
				["judul"=>"Laporan 1","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"],
				["judul"=>"Laporan 2","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"],
				["judul"=>"Laporan 3","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"],
				["judul"=>"Laporan 4","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"],
				["judul"=>"Laporan 5","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"],
				["judul"=>"Laporan 6","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"],
				["judul"=>"Laporan 7","isi"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur numquam laudantium, dicta esse quaerat quae.","link"=>"/laporan/judul"]
			],
			"services"=>[
				["judul"=>"24 Jam","desk"=>"Siap siap menerima laporan Anda.","media"=>"static/img/24h.png"],
				["judul"=>"Lokasi","desk"=>"Kirim lokasi yang Anda lapor.","media"=>"static/img/map.png"],
				["judul"=>"Hadiah","desk"=>"Kumpulkan bintang untuk dapatkan uang tunai.","media"=>"static/img/cash.png"]
			]);
		//gunakan direktori ketika membuat view baru (nama direktori = nama controller)
		$this->load->view('home/index',$data);
	}
}

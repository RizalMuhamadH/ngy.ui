<?php
class Home extends CI_Controller
{
    
    function __construct()
    {
      parent::__construct();
    }
    
    function index()
    {
      $this->template->display('frontend/content');
    }

    function delivery_now()
    {
      $this->template->display('frontend/delivery_now');
    }

    function sambutan_presdir()
    {
      $this->template->display('frontend/sambutan_presdir');
    }

    function profil_perusahaan()
    {
      $this->template->display('frontend/profil_perusahaan');
    }

    function kami_dan_customer()
    {
      $this->template->display('frontend/kami_dan_customer');
    }

    function kebijakan_pengiriman()
    {
      $this->template->display('frontend/kebijakan_pengiriman');
    }

    function ketentuan_pengiriman()
    {
      $this->template->display('frontend/ketentuan_pengiriman');
    }

    function disclaimer()
    {
      $this->template->display('frontend/disclaimer');
    }

    function faq()
    {
      $this->template->display('frontend/faq');
    }

    function packing_barang()
    {
      $this->template->display('frontend/packing_barang');
    }

    function cara_kirim_barang()
    {
      $this->template->display('frontend/cara_kirim_barang');
    }

    function pembayaran()
    {
      $this->template->display('frontend/pembayaran');
    }

    function maintenance()
    {
      $this->template->display('frontend/maintenance');
    }

    

}
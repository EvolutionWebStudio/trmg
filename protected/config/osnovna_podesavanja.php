<?php 

class podesavanja
{
   public $root = '';
   
   public function m_sliku($ime)
   {
       echo '/media/images/'.$ime;
	
	}
	
	 public function kamera($ime)
   {
       echo '/media/kamera/'.$ime;
	
	}

	public function sliku($ime)
	{
	   include($this->root.'img/'.$ime);
	
	}
	
	public function m_baner($ime)
   {
       include($this->root.'media/baner/'.$ime);
	
	}
	
	public function css($ime)
	{
		include('css/'.$ime);
	
	}
	
	public function inc($ime)
	{
		include('include/'.$ime);
	
	}
	
	public function galerija($ime)
	{
		include('galerija/'.$ime);
	
	}
	
	public function slider($ime)
	{
		include('slider/'.$ime);
	
	}



}

$ubaci = new podesavanja();




?>
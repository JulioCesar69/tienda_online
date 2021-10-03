<?php 
	require_once("Models/TCategoria.php");
	class Home extends Controllers{
		use TCategoria;
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_tag'] = "Tienda virtual PC Box";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$data['slider'] = $this->getCategoriasT(CAT_SLIDER);
			$data['banner'] = $this->getCategoriasT(CAT_BANNER);
			$this->views->getView($this,"home",$data);
		}

	}
 ?>
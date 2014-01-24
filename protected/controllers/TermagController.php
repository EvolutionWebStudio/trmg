<?php


class TermagController extends Controller
{
    
    // Niz u koji se ucitava jezicki fajl    
    public $langArray = array();
    
   //promjnljive za citanje iz baze clanci
	public $slika;
	public $baner;
	public $naslov;
	public $sadrzaj;
	public $rows = array();
	public $sekcija;
	public $forma  = '';
	public $izgled_kontakta = 'podaci';  /* Da li ce se u view kontakta prikazati podaci ili forma */
	public $forma_i_clanak = '';
	public $kategorija;
	public $alias;
    
    
    //promjenljive za meta
    public $metaTitle;
    public $metaKeywords;
    public $metaDescription;
	
	//promjnljive za citanje iz baze cjenovnik
	public $period_od;
	public $period_do;
	public $tip;
	public $cjena_km;
	public $cjena_eur;
	public $red = array();
    public $red1 = array();
    public $tipSobe = array();
    public $tipApartmana = array();
    
   	//promjnljive za citanje iz baze slajderi
	public $nalovSlajderi;
    public $linija = array();
    
    //promjnljive za citanje iz baze vijesti
//	public $element;
    public $element = array();
    public $elementi = array();
    public $id;
    public $vijest=3;
    public $jezik;
    public $models;
    public $pages;
    
    //vremenska prognoza
	public $vremenska_prognoza = '';

    //rezervaija

    public  $broj=0;
	
    public $naslovStranice;
    public $koliba;
    public $pocetna;
    public $rezervacije;
    public $jahorinaZimi;
    public $lokacija;
    public $kamera;
    
    
    
    
  
    /**
     * TermagController::getLang()
     * Funkcija koja mjenja jezik i ucitava jezicki fajl
     * Treba da se pozove na pocetku svake akcije!
     * 
     * @return
     */
    public function getLang()
    {
    	$lang_path = 'lang/';
        if(isset($_GET['lang']))
        {
            Yii::app()->session["lang"] = $_GET['lang'];    
        }
            
        if(!file_exists($lang_path.Yii::app()->session["lang"].'.ini'))
        {
			Yii::app()->session["lang"] = 'sr';
        }
		
		$this->langArray= parse_ini_file($lang_path.Yii::app()->session["lang"].'.ini'); 
    }
   
    public function getVijest()
    {
         if(isset($_GET['vijest']))
        {
            $this->vijest = $_GET['vijest'];    
        }
        else
            
            $this->vijest = false;
    }    
       
        
	
	/**
	 * TermagController::baseCjenovnik()
	 * funkcija za citanje iz baze cjenovnik
     * 
	 * @return
	 */
	public function baseCjenovnik()
	{
		
		$p = array();
		$this->red = Cjenovnik::model()->findAll("id>0");
        $this->red1 = TekstCjenovnik::model()->findAllByAttributes(array('jezik'=>Yii::app()->session["lang"]));
	/*	$this->period_od = $konj->period_od;
		$this->period_do = $row->period_do;
		$this->tip = $row->tip;
		$this->cjena_km = $row->cjena_km;
		$this->cjena_eur = $row->cjena_eur;*/
	}
	//funkcija za citanje iz baze clanak
	/**
	 * TermagController::base()
	 * 
	 * @param mixed $kategorija
	 * @return
	 */
	public function base($alias)
	{
		$row = array();
		$p = array();
		$row = Clanci::model()->findByAttributes(array('alias'=>$alias,'jezik'=>Yii::app()->session["lang"]));
		$this->slika = $row->slika;
		$this->baner = $row ->baner;
		$this->naslov = $row ->naslov;
		$this->sadrzaj = $row ->clanak;
		$this->sekcija = $row ->sekcija;
		$this->kategorija = $row ->kategorija;
		$this->alias = $row ->alias;
        $this->metaTitle = $row ->meta_title;
        $this->metaKeywords = $row->meta_keywords;
        $this->metaDescription = $row->meta_description;
		
		if($this->sekcija == 'meni-gore'){
		$this->rows = Clanci::model()->findAllByAttributes(array('sekcija'=>'Termag','jezik'=>Yii::app()->session["lang"]),array('order'=>'sortiranje ASC'));
		}
		else{
		$this->rows = Clanci::model()->findAllByAttributes(array('sekcija'=>$this->sekcija,'jezik'=>Yii::app()->session["lang"]),array('order'=>'sortiranje ASC'));
		}
		// $command=$connection->createComand($sql);
		// $this->konj = $p->kategorija;
		// $this->magarac = $p->kategorija;
	}
    
//funkcija za povezivanje baze slajderi
    public function baseSlajderi()
    {
        
        $this->linija = Slajderi::model()->findAllByAttributes(array('jezik'=>Yii::app()->session["lang"]),array('order'=>'id'));
        $this->nalovSlajderi = $red[0] -> naslov;
        
        
    }
    
//funkcija za povezivanje baze Vijesti
    public function baseVijesti($id)
    {
        if($id>0)
        {
            $this->element = Vijesti::model()->findByAttributes(array('jezik'=>Yii::app()->session["lang"],'id'=>$id),array('order'=>'id DESC'));
            $this->metaTitle = $this->element->meta_title;
            $this->metaKeywords = $this->element->meta_keywords;
            $this->metaDescription = $this->element->meta_description;
        }
        elseif($id==-1)
        {
            //pagination
                    $criteria = new CDbCriteria();
                    $criteria->order='id DESC';
                    $this->jezik=Yii::app()->session["lang"];
                    $criteria->condition="jezik='$this->jezik'";
                     $count=Vijesti::model()->count($criteria);
                    $this->pages=new CPagination($count);
            
                    // results per page
                     $this->pages->pageSize=15;
                    $this->pages->applyLimit($criteria);
                     $this->models = Vijesti::model()->findAll($criteria);
            
        }
        else
        {
        //pagination
                    $criteria = new CDbCriteria();
                    $criteria->order='id DESC';
                    $this->jezik=Yii::app()->session["lang"];
                    $criteria->condition="jezik='$this->jezik'";
                     $count=Vijesti::model()->count($criteria);
                    $this->pages=new CPagination($count);
            
                    // results per page
                     $this->pages->pageSize=5;
                    $this->pages->applyLimit($criteria);
                     $this->models = Vijesti::model()->findAll($criteria);
        }
        
        $this->elementi = Vijesti::model()->findAllByAttributes(array('jezik'=>Yii::app()->session["lang"]),array('order'=>'id DESC'));
        
        
        
    }
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
*/
	/**
	 * TermagController::actions()
	 * 
	 * @return
	 */
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	
	// pocetna stranica
	/**
	 * TermagController::actionIndex()
	 * 
	 * @return
	 */
	public function actionIndex()
	{
		$this->getLang();
        $this->baseSlajderi();
        $this->pocetna = true;
		$this->naslovStranice = 'Najbolji hotel na Jahorini';
		$this->render('index');
	}
	
    	/**
	 * This is the action to handle external exceptions.
	 */
	/**
	 * TermagController::actionError()
	 * 
	 * @return
	 */
	public function actionError()
	{
	   $this->getLang();
	   $this->naslovStranice = 'Greska';
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
//TERMAG 
	
	//O Hotelu
	/**
	 * TermagController::actionO_hotelu()
	 * 
	 * @return
	 */
	public function actionO_hotelu()
	{
		$this->getLang();
		$this->base('o_hotelu');
        $this->naslovStranice = "O Hotelu";
		$this->render('clanak');
        
	}
    
    //Termag novi dio
	/**
	 * TermagController::actionTermag_novi_dio()
	 * 
	 * @return
	 */
	public function actionTermag_novi_dio()
	{
		$this->getLang();
		$this->base('termag-novi-dio');
        $this->naslovStranice = "Termag novi dio";
		$this->render('clanak');
        
	}
	
	//Jahorina zimi
	/**
	 * TermagController::actionJahorina_zimi()
	 * 
	 * @return
	 */
	public function actionJahorina_zimi()
	{
        $this->getLang();
		$this->base('jahorina_zimi');
        $this->naslovStranice = 'Jahorina Zimi';
        $this->jahorinaZimi = true;
		$this->render('clanak');
        
	}
	
	//Jahorina ljeti
	/**
	 * TermagController::actionJahorina_ljeti()
	 * 
	 * @return
	 */
	public function actionJahorina_ljeti()
	{
        $this->getLang();
		$this->base('jahorina_ljeti');
        $this->naslovStranice = 'Jahorina Ljeti';
		$this->render('clanak');
        
	}
	
	//Lokacija
	/**
	 * TermagController::actionLokacija()
	 * 
	 * @return
	 */
	public function actionLokacija()
	{
	    $this->getLang();
		$this->base('lokacija');
        $this->naslovStranice = 'Lokacija';
        $this->lokacija = true;
		$this->render('clanak');
        
	}
	
	//Galerija
	/**
	 * TermagController::actionGalerija()
	 * 
	 * @return
	 */
	public function actionGalerija()
	{
	    $this->getLang();
		//$this->base('Lokacija');
		//$this->layout='galerija_layout.php';
        $this->naslovStranice = 'Galerija';
		$this->render('galerija');
        
	}
	//Prijatelji sajta
	/**
	 * TermagController::actionPrijatelji_sajta()
	 * 
	 * @return
	 */
	public function actionPrijatelji_hotela()
	{
	    $this->getLang();
		$this->base('prijatelji_hotela');
        $this->naslovStranice = 'Prijatelji Hotela';
		$this->render('clanak');
        
	}

//SMJESTAJ
	
	//Sobe
	/**
	 * TermagController::actionSobe()
	 * 
	 * @return
	 */
	public function actionSobe()
	{
	    $this->getLang();
		$this->base('sobe');
        $this->naslovStranice = 'Sobe';
		$this->render('clanak');
		
	}
	//Apartmani
	/**
	 * TermagController::actionApartmani()
	 * 
	 * @return
	 */
	public function actionApartmani()
	{
	    $this->getLang();
		$this->base('apartmani');
        $this->naslovStranice = 'Apartmani';
		$this->render('clanak');
        
	}
    // novi dio
	/**
	 * TermagController::actionNovi_dio()
	 * 
	 * @return
	 */
	 /*
	public function actionNovi_dio()
	{
		$this->getLang();
		$this->base('novi-dio');
        $this->naslovStranice = "Novi dio";
		$this->render('clanak');
        
	}*/
	//Vila Termag
	/**
	 * TermagController::actionVilla_termag()
	 * 
	 * @return
	 */
	public function actionVilla_termag()
	{
	    $this->getLang();
		$this->base('villa_termag');
        $this->naslovStranice = 'Villa Termag';
		$this->render('clanak');
        
	}
    //Virtual Tour
    /**
     * TermagController::actionVirtual_tour()
     * 
     * @return
     */
    public function actionVirtual_tour() 
    {
        $this->getLang();
        $this->naslovStranice = 'Virtuelna Šetnja';
        $this->render('virtual_tour');
        
    }
    /**
     * TermagController::actionVirtual_tour()
     * 
     * @return
     */
    public function actionVirtual_tour_dodatno() 
    {
        $this->getLang();
        $this->naslovStranice = 'Virtuelna Šetnja';
        $this->render('virtual_tour_dodatno');
        
    }
    
    
	//cjenovnik
	/**
	 * TermagController::actionCjenovnik()
	 * 
	 * @return
	 */
	public function actionCjenovnik_ljeto()
	{
	    $this->getLang();
        $this->tipSobe = array(0=>$this->langArray['jednokrevetna'],1=>$this->langArray['dvokrevetna'],2=>$this->langArray['pomocni_lezaj'],3=>$this->langArray['lezaj_dijete']);
        $this->tipApartmana = array(0=>$this->langArray['jednokrevetni'],1=>$this->langArray['dvokrevetni'],2=>$this->langArray['pomocni_lezaj'],3=>$this->langArray['lezaj_dijete']);
		$this->baseCjenovnik();
        $this->naslovStranice = 'Cjenovnik';
		$this->render('cjenovnik-ljeto');
        
	}

    
    public function actionCjenovnik()
    {
        $this->getLang();
        $this->tipSobe = array(0=>$this->langArray['standard_soba'],1=>$this->langArray['standard_soba1'],2=>$this->langArray['superior_soba'],3=>$this->langArray['superior_soba1'],4=>$this->langArray['apartman'],5=>$this->langArray['apartman1'],6=>$this->langArray['delux'],7=>$this->langArray['delux1']);
        $this->tipApartmana = array(0=>$this->langArray['soba_basic'],1=>$this->langArray['soba_basic1'],2=>$this->langArray['soba_lux'],3=>$this->langArray['soba_lux1'],4=>$this->langArray['studio_ap'],5=>$this->langArray['studio_ap1'],6=>$this->langArray['superior_ap'],7=>$this->langArray['superior_ap1']);
        $this->baseCjenovnik();
        $this->naslovStranice = 'Cjenovnik';
		$this->render('cjenovnik');
        
    }
    
    public function actionIgraonica()
	{
	    $this->getLang();
		$this->base('igraonica');
        $this->naslovStranice = 'Igraonica';
		$this->render('clanak');
        
	}

//SPA&WELNESS
	
	//SPA Centar
	/**
	 * TermagController::actionSpa_centar()
	 * 
	 * @return
	 */
	public function actionSpa_centar()
	{
        $this->getLang();
		$this->base('spa_centar');
        $this->naslovStranice = 'Spa Centar';
		$this->render('clanak');
        
	}
	//Masaze i tretmani
	/**
	 * TermagController::actionMasaze_i_tretmani()
	 * 
	 * @return
	 */
	public function actionMasaze_i_tretmani()
	{
	    $this->getLang();
		$this->base('masaze_i_tretmani');
        $this->naslovStranice = 'Masaže i Tretmani';
		$this->render('clanak');
        
	}
	
	//Vanpensionska ponuda
	/**
	 * TermagController::actionVanpensionska_ponuda()
	 * 
	 * @return
	 */
	public function actionVanpensionska_ponuda()
	{
	    $this->getLang();
		$this->base('vanpensionska_ponuda');
        $this->naslovStranice = 'Vanpansionska Ponuda';
		$this->render('clanak');
        
	}
	
//RESTORANI

	//Hotelski restoran
	/**
	 * TermagController::actionHotelski_restoran()
	 * 
	 * @return
	 */
	public function actionHotelski_restoran()
	{
	    $this->getLang();
		$this->base('hotelski_restoran');
        $this->naslovStranice = 'Hotelski Restoran';
		$this->render('clanak');
        
	}
	
	//Kamin sala
	/**
	 * TermagController::actionKamin_sala()
	 * 
	 * @return
	 */
	public function actionKamin_sala()
	{
	    $this->getLang();
		$this->base('kamin_sala');
        $this->naslovStranice = 'Kamin Sala';
		$this->render('clanak');
        
	}
	
	//Koliba
	/**
	 * TermagController::actionKoliba()
	 * 
	 * @return
	 */
	public function actionKoliba()
	{
	    $this->getLang();
		$this->base('koliba');
        $this->naslovStranice = 'Koliba';
        $this->koliba = true;
		$this->render('clanak');
        
		
	}
	
//SPECIJALNE PONUDE

	//Porodicni vikend
	/**
	 * TermagController::actionPorodicni_vikend()
	 * 
	 * @return
	 */
	public function actionPorodicni_vikend()
	{
	    $this->getLang();
		$this->base('porodicni_vikend');
        $this->naslovStranice = 'Porodicni Vikend';
		$this->render('clanak');
        
	}
	
	//Relax vikend
	/**
	 * TermagController::actionRelax_vikend()
	 * 
	 * @return
	 */
	public function actionRelax_vikend()
	{
	    $this->getLang();
		$this->base('relax_vikend');
        $this->naslovStranice = 'Relax Vikend';
		$this->render('clanak');
        
	}
	
	//Romanticni vikend
	/**
	 * TermagController::actionRomanticni_vikend()
	 * 
	 * @return
	 */
	public function actionRomanticni_vikend()
	{
	    $this->getLang();
		$this->base('romanticni_vikend');
        $this->naslovStranice = 'Romantični Vikend';
		$this->render('clanak');
        
	}
	
	//Antistress vikend
	/**
	 * TermagController::actionAntistress_vikend()
	 * 
	 * @return
	 */
	public function actionAntistress_vikend()
	{
	    $this->getLang();
		$this->base('antistress_vikend');
        $this->naslovStranice = 'Antistress Vikend';
		$this->render('clanak');
        
	}
	
	//Extreme vikend
	/**
	 * TermagController::actionExtreme_vikend()
	 * 
	 * @return
	 */
	public function actionExtreme_vikend()
	{
	    $this->getLang();
		$this->base('extreme_vikend');
        $this->naslovStranice = 'Extreme Vikend';
		$this->render('clanak');
        
	}
	
	//Život je igra vikend
	/**
	 * TermagController::actionZivot_je_igra()
	 * 
	 * @return
	 */
	public function actionZivot_je_igra()
	{
	    $this->getLang();
		$this->base('zivot_je_igra');
        $this->naslovStranice = 'Život je Igra';
		$this->render('clanak');
        
	}
	
	//Poklon vaucer
	/**
	 * TermagController::actionPoklon_vaucer()
	 * 
	 * @return
	 */
	public function actionPoklon_vaucer()
	{
	    $this->getLang();
		$this->forma_i_clanak='da';
		$this->forma='_poklon_vaucer_forma.php';
		$this->base('poklon_vaucer');
        $this->naslovStranice = 'Poklon Vaučer';
		$this->render('clanak');
        
	}
	
	public function actionLjeto_na_jahorini()
	{
	    $this->getLang();
		$this->base('ljeto_na_jahorini');
        $this->naslovStranice = 'Ljeto na Jahorini';
		$this->render('clanak');
        
	}
	
//BUSINESS

	//Ponuda
	/**
	 * TermagController::actionPonuda()
	 * 
	 * @return
	 */
	public function actionPonuda()
	{
	    $this->getLang();
		$this->base('ponuda');
        $this->naslovStranice = 'Business Ponuda';
		$this->render('clanak');
        
	}
    
    //Seminari
	/**
	 * TermagController::actionSeminari()
	 * 
	 * @return
	 */
	public function actionSeminari()
	{
	    $this->getLang();
		$this->base('seminari');
        $this->naslovStranice = 'Seminari';
		$this->render('clanak');
        
	}
    
    //Team Building
	/**
	 * TermagController::actionTeam_building()
	 * 
	 * @return
	 */
	public function actionTeam_building()
	{
	    $this->getLang();
		$this->base('team_building');
        $this->naslovStranice = 'Team Building';
		$this->render('teamBuilding');
        
	}
	
	//Rezervacija
	/**
	 * TermagController::actionRezervacije()
	 * 
	 * @return
	 */
	public function actionRezervacije()
	{
	    $this->getLang();
		$this->forma_i_clanak='da';
		$this->forma='_business_rezervacija_forma.php';
		$this->base('rezervacije');
        $this->naslovStranice = 'Business Rezervacije';
        $this->rezervacije = true;
		$this->render('clanak');
        
	}
	
	
	
//KONTAKT

	//Kontakt podaci
	
	/**
	 * TermagController::actionKontaktirajte_nas()
	 * 
	 * @return
	 */
	public function actionKontaktirajte_nas()
	{
		$this->getLang();
		$this->base('kontaktirajte_nas');
        $this->naslovStranice = 'Kontakt Info';
		$this->render('clanak');
        
	}
    
    
    public function actionWeb_camera()
	{
		$this->getLang();
        $this->naslovStranice = 'Web kamera';
        $this->kamera = true; 
		$this->render('kamera-panorama');
        
	}
    
    public function actionVrijeme()
	{
	    $this->getLang();
		$this->vremenska_prognoza = '_vremenska_prognoza.php';
        $this->naslovStranice = 'Vremenska Prognoza';
		$this->render('vrijeme');
        
		
	}
    

    
    public function actionWebmasters()
	{
		$this->getLang();
        $this->naslovStranice = 'Webmasters';  
		$this->render('webmasters');
        
	}
    
	
	//Kontakt forma
	
	/**
	 * TermagController::actionKontakt_forma()
	 * 
	 * @return
	 */
	public function actionKontakt_forma()
	{
	    $this->getLang();
		$this->forma_i_clanak='ne';
		$this->forma='_kontakt_forma.php';
		$this->izgled_kontakta = 'forma';
		$this->base('kontaktirajte_nas');
        $this->naslovStranice = 'Kontakt Forma';
		$this->render('clanak');
        
	}
	//Vremenska prognoza
	/**
	 * TermagController::actionVrijeme()
	 * 
	 * @return
	 */
	public function actionKlima()
	{
	    $this->getLang();
		$this->base('klima');
		$this->vremenska_prognoza = '_vremenska_prognoza.php';
        $this->naslovStranice = 'Klima';
		$this->render('clanak');
        
		
	}
    
    //Vijesti
    public function actionVijesti()
    {
        $this->getLang();
        $this->getVijest();
        $this->baseVijesti($this->vijest);
        $this->naslovStranice = 'Vijesti';
        $this->render('vijesti', array(
    'models' => $this->models,
         'pages' => $pages
    ));
    }
    
    //Rezervacija online
	/**
	 * TermagController::actionRezervacija()
	 * 
	 * @return
	 */
	public function actionRezervacija()
	{
	    $this->getLang();
        $this->naslovStranice = 'Online Rezervacija';
		$this->render('rezervacija');
        
		
	}
	
	public function actionDownload()
	{
	    $this->getLang();
		$this->base('download');
        $this->naslovStranice = 'Download';
		$this->render('download');
        
		
	}
	
	 //Administratorski panel
	/**
	 * TermagController::actionAdministrator()
	 * 
	 * @return
	 */
	/*public function actionAdministrator()
	{
	    $this->getLang();	
        $this->layout='admin.php';
		$this->render('administrator');
		
	}*/

//TEST
	/**
	 * TermagController::actionTest()
	 * 
	 * @return
	 */
/*	public function actionTest()
	{
	   $this->getLang();	
	    $criteria = new CDbCriteria();
        $criteria->order='id DESC';
        $this->jezik=Yii::app()->session["lang"];
        $criteria->condition="jezik='$this->jezik'";
    $count=Vijesti::model()->count($criteria);
    $pages=new CPagination($count);

    // results per page
    $pages->pageSize=2;
    $pages->applyLimit($criteria);
    $models = Vijesti::model()->findAll($criteria);

    $this->render('test', array(
    'models' => $models,
         'pages' => $pages
    ));
	
	}*/
    
    	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	    $this->getLang();
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
    
     /**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
	   $this->getLang();
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
 
}
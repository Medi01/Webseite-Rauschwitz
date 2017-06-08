<?php

class Constructor{

  private static $_instance = null;
  public $title;
	public $headline;
  public $modfile;
  public $viewfile	= ".default";
	public $cssfiles	= [];
	public $jsfiles		= [];

  function __construct(){
    self::$_instance = $this;
  }

  public function build(){

    if ($_GET[0] == "admin"){
      switch ($_GET[1]) {
        case "dashboard":
          $this->headline   = "Dashboard";
          $this->viewfile		= "dashboard.php";
          break;

        case "posts":
          $this->headline   = "Posts Verwalten";
          $this->viewfile		= "posts.php";
          if ($_GET[2] == "new"){
            $this->headline   = "Neuen Post verfassen";
          }
          if ($_GET[2] == "edit"){
            $this->headline   = "Posts bearbeiten";
          }
          break;
      }
    }else {
      switch ($_GET[0]) {
        default:
          $this->headline 	= "Aktuelles";
          $this->viewfile   = "aktuelles.php";
          break;

        case "sportfest":
          $this->headline   = "Unser Sportfest";
          $this->viewfile   = "sportfest.php";
          break;

        case "bildergalerie":
          $this->headline   = "Bildergalerie";
          $this->viewfile   = "bildergalerie.php";
          $this->cssfiles[] = "";
          $this->jsfiles[]  = "";
          $this->jsfiles[]  = "";
          break;

        case "feuerwehr":
          $this->headline   = "Feuerwehr";
          $this->viewfile   = "feuerwehr.php";
          break;

        case "allgemeines":
          $this->headline   = "Allgemeines";
          $this->viewfile   = "allgemeines.php";
          break;

        case "impressum":
    			$this->headline		= "Impressum";
    			$this->viewfile		= "impress.php";
    			break;
      }

      switch ($this->view) {
        case "view":
          $this->title	= TITLE;
          $this->modfile	= __FRONTEND__ . "/view.php";
          // $this->cssfiles = array_merge([CSS_Bootstrap],$this->cssfiles,[CSS_styles]);
          break;

        case "login":
  			  $this->title	= TITLE_ADMIN;
  			  $this->modfile	= __FRONTEND__ . "/login.php";
  			  // $this->cssfiles	= array_merge([CSS_Bootstrap],$this->cssfiles,[CSS_login]);
          break;

        case "admin":
  			  $this->title	= TITLE_ADMIN;
  			  $this->modfile	= __FRONTEND__ . "/admin.php";
  			  // $this->cssfiles	= array_merge([CSS_Bootstrap],$this->cssfiles,[CSS_admin]);
  			  // $this->jsfiles	= array_merge([JS_jQuery, JS_Bootstrap],$this->jsfiles,[JS_admin]);
  			  break;

        default :
  			   return false;
      }
      include_once __FRONTEND__ . "/blueprint.php";
		  return true;
    }
  }

  static public function getInstance() {
		if (self::$_instance === null)
			self::$_instance = new Constructor();
		return self::$_instance;
	}
}


?>

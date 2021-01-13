<?php

require_once 'model/ToursService.php';

class ToursController {

	private $toursService = NULL;
	public function __construct() {
		$this->toursService = new ToursService();
	}

	public function redirect($location) {
		header('Location: '.$location);
	}

	public function handleUserRequest() {
		$page = isset($_GET['page'])?$_GET['page']:NULL;
		try {
			if(!$page ||$page == 'home') {
				include 'view/home.php';
			}
			else if($page == 'cars') {
				include 'view/cars.php';
			}
			else if($page == 'aboutus') {
				include 'view/aboutus.php';
			}
			else if($page == 'reviews') {
				include 'view/reviews.php';
			}
			else if($page == 'contactus') {
				include 'view/contactus.php';
			}


			else if($page == 'family_tour_listing') {
				include 'view/family_tour_listing.php';
			}
			else if($page == 'temple_tour_listing') {
				include 'view/temple_tour_listing.php';
			}
			else if($page == 'honeymoon_tour_listing') {
				include 'view/honeymoon_tour_listing.php';
			}
			else if($page == 'hill_station_tour_listing') {
				include 'view/hill_station_tour_listing.php';
			}

			//family_tour_listing pages
			else if($page == 'coorg') {
				include 'view/coorg.php';
			}
			else if($page == 'munnar') {
				include 'view/munnar.php';
			}
			else if($page == 'mysore') {
				include 'view/mysore.php';
			}
			else if($page == 'ooty') {
				include 'view/ooty.php';
			}
			else if($page == 'pondicherry') {
				include 'view/pondicherry.php';
			}
			else if($page == 'kerala') {
				include 'view/kerala.php';
			}

			//templle_tour_listing pages
			else if($page == 'lord_muruga_temple') {
				include 'view/lord_muruga_temple.php';
			}
			else if($page == 'navagraha_temple') {
				include 'view/navagraha_temple.php';
			}
			else if($page == 'thirupathi_balaji_temple') {
				include 'view/thirupathi_balaji_temple.php';
			}
			else if($page == 'rameshwaram_temple') {
				include 'view/rameshwaram_temple.php';
			}
			else if($page == 'meenakshi_temple') {
				include 'view/meenakshi_temple.php';
			}
			else if($page == 'brihadeswara_temple') {
				include 'view/brihadeswara_temple.php';
			}

			//honeymoon_tour_listing pages
			else if($page == 'honeymon_to_coorg') {
				include 'view/honeymon_to_coorg.php';
			}
			else if($page == 'honeymon_to_munnar') {
				include 'view/honeymon_to_munnar.php';
			}
			else if($page == 'honeymon_to_mysore') {
				include 'view/honeymon_to_mysore.php';
			}
			else if($page == 'honeymon_to_ooty') {
				include 'view/honeymon_to_ooty.php';
			}
			else if($page == 'honeymon_to_pondicherry') {
				include 'view/honeymon_to_pondicherry.php';
			}
			else if($page == 'honeymon_to_kerala') {
				include 'view/honeymon_to_kerala.php';
			}

			//hill_station_tour_listing pages
			else if($page == 'tamil_nadu_hills') {
				include 'view/tamil_nadu_hills.php';
			}
			else if($page == 'wayanad_hills') {
				include 'view/wayanad_hills.php';
			}
			else if($page == 'chikmagalur_hills') {
				include 'view/chikmagalur_hills.php';
			}
			else if($page == 'cochin_munnar_hills') {
				include 'view/cochin_munnar_hills.php';
			}
			else if($page == 'south_india_hills') {
				include 'view/south_india_hills.php';
			}


			else {
				$this->showError("Page not found", "".$page."Page was not found!");
			}
		}
		catch ( Exception $e ) {
			$this->showError("Application error", $e->getMessage());
		}
	}

	public function handleAdminRequest() {
		$page = isset($_GET['page'])?$_GET['page']:NULL;
		try {
			if(!$page ||$page == 'home') {
				include 'admin_view/home.php';
			}
			else {
				$this->showError("Page not found", "".$page."Page was not found!");
			}
		}
		catch ( Exception $e ) {
			$this->showError("Application error", $e->getMessage());
		}
	}

	public function checkCredential() {

    $uid = '';
    $pwd = '';
    $type = '';

    $errors = array();
        
    if ( isset($_GET['submit']) ) {
            
    	$uid       = isset($_GET['uid']) ?   $_GET['uid']  :NULL;
    	$pwd      = isset($_GET['pwd'])?   $_GET['pwd'] :NULL;
    	$type      = isset($_GET['type'])?   $_GET['type'] :NULL;

    	try {
        	if($this->carsService->checkaccount($uid,$pwd) == true) {
        		if($this->carsService->checkaccounttype($uid,$type) == true) {
        			if($type == 'admin') {
        				$this->redirect("admin.php?op=disp");
                		return;
                	} else {
                		$this->redirect('index.php');
                		return;
                	}
        		}
        	} else {
        		Throw new Exception("Invalid Credentials!!!");
        	}

        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }

    include 'adminview/login.php';
    }
}	

?>
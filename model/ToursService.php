<?php

require_once 'model/ToursGateway.php';
require_once 'model/ValidationException.php';

class ToursService {
    
	private $toursGateway = NULL;
	private $con = NULL;

	private function openDb()
	{
		$this->con=mysqli_connect("localhost","root","","rental-cars");
		if (mysqli_connect_errno())
		{
			throw new Exception("Connection to the database server failed!");
		}
	}	

	private function closeDb() {
		mysqli_close($this->con);
	}

	public function __construct() {
        $this->toursGateway = new ToursGateway();
    }

    public function checkaccount($uid,$pwd) {
        try {
            $this->openDb();
            $res = $this->toursGateway->checkUser($uid,$pwd,$this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
}

?>
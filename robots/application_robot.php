<?php
class ApplicationRobot extends Atk14Robot{
	function beforeRun(){
		$this->dbmole->begin();
	}

	function afterRun(){
		$this->dbmole->commit();
	}
}

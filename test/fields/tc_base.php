<?php
class TcBase extends TcAtk14Field{

	function _setUp(){
		$this->dbmole->begin();
	}

	function _tearDown(){
		$this->dbmole->rollback();
	}
}

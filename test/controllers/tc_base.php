<?php
/**
 * The base class of every controller`s test case class.
 *
 * Notice that TcBase is descendant of TcAtk14Controller
 * so there are a couple of special member variables in advance.
 */
class TcBase extends TcAtk14Controller{

	function _setUp(){
		$this->dbmole->begin();
	}

	function _tearDown(){
		$this->dbmole->rollback();
	}
}

<?php


class Connection {

	public static function connect($config) {
		try {
			return new PDO($config['host'] .';dbname='.$config['dbname'],$config['username'],$config['password']);
			} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}
}


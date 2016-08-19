<?php
// uncomment this to display internal server errors.
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

ini_set('include_path', ini_get('include_path').';../libraries/;');
require_once ('waad-federation/ConfigurableFederatedLoginManager.php');

session_start();
$token = $_POST['wresult'];
$loginManager = new ConfigurableFederatedLoginManager();

if (!$loginManager->isAuthenticated()) {
	if (isset ($token)) {
		try {
			$loginManager->authenticate($token);			
		} catch (Exception $e) {
			print_r($e->getMessage());
		}
	} else {
		$returnUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

		header('Pragma: no-cache');
		header('Cache-Control: no-cache, must-revalidate');
		header("Location: https://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']) . "/login.php?returnUrl=" . $returnUrl, true, 302);
		exit();
	}
}
?>
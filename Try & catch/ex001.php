<?php
try{
	throw new Exception ("Houve um erro", 404);
}

catch(Exception $erro){
	
	echo json_encode(array(
		"message"=>$erro->getMessage(),
		"line"=>$erro->getLine(),
		"file"=>$erro->getFile(),
		"code"=>$erro->getCode()
		
		
		));
}
?>
<?

final class password extends field{

	function view(){
		echo "Password encriptado md5";
	}
	function bake_field (){
	
			echo "<input type=\"text\" cols=\"120\" id=\"".$this->fieldname."\" name=\"".$this->value."\" value=\"\"><BR>Se sobre-escribira el password anterior."; 
					
					
					
	}
		
	function exec_add () {
		if ($this->value != "")
		return sha1(strtolower($this->value));
		else return '';
	}
	function exec_edit () {
		if ($this->value != "")
			return sha1(strtolower($this->value)); 
		return '';
	}

}


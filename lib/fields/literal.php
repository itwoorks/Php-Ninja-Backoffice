<?



final class literal extends field{

	function view(){
		return $this->value;
	}
	function bake_field (){
		return "<input  type=\"text\" class='span5' name=\"".$this->fieldname."\" id=\"".$this->fieldname."\" value=\"".$this->value."\">";

		

						
	}
		
	function exec_add () {

return htmlentities(utf8_decode($this->value));

	}
	function exec_edit () {
return htmlentities(utf8_decode($this->value));
	}

}


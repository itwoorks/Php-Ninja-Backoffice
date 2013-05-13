<?


final  class tinymce extends field{

	function view(){
		return  $this->value;
	}
	function bake_field (){
		return "<textarea class='mceEditor'  id=\"".$this->fieldname."\" name=\"".$this->fieldname."\"  >".stripslashes($this->value)."</textarea>";
					
	}
		
	function exec_add () {
		return addslashes($this->value);		
	}
	function exec_edit () {
			return addslashes($this->value);
	}

}

							
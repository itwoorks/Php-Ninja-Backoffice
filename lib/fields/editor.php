<?


final  class editor extends field{

	function view(){
		return  $this->value;
	}
	function bake_field (){
		return "<input style='visibility:hidden;' name=\"".$this->fieldname."\"><div id='".$this->fieldname."' class='span6' name=\"".$this->fieldname."\"  >".stripslashes($this->value)."</div>";
					
	}
		
	function exec_add () {
		return addslashes($this->value);		
	}
	function exec_edit () {
			return addslashes($this->value);
	}

}

							
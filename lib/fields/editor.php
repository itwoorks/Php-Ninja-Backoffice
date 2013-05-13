<?


final  class editor extends field{

	function view(){
		return  $this->value;
	}
	function bake_field (){
		return "<input style='visibility:hidden;' name=\"".$this->fieldname."\"><div id='editor' class='span6' name=\"".$this->fieldname."\"  >".$this->value."</div>";
					
	}
		
	function exec_add () {
		return $this->value;		
	}
	function exec_edit () {
			return $this->value;
	}

}

							
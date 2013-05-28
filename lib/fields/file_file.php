<?

final class file_file extends field{


	function view(){
			return "<a href='".$this->config->http_files_dir.$this->value."'>".$this->config->http_files_dir.$this->value."</a>";
	}
	function bake_field (){
    	$output = "";
		if ($this->value != -1){
 			$output .= "<b>Documento cargado:</b> ";
			$output .= "<div id='".$this->fieldname."'><a  href=\"".$this->http_files_dir.$this->value."\" target=\"_blank\">".$this->value."</a><a  href=\"javascript:DeleteFile('".$this->fieldname."',".$this->rid.",'".$this->fieldname."','".$this->tabla."');\"><img src='".$this->config->base_http."lib/img/close.jpg'></a></div>"; }else{ $output .= "ninguno";
			$output .= "<BR>";
		}
							
		$output .= "<input type=\"file\" name=\"".$this->fieldname."\">";
			return $output;					
	}
		
	function exec_add () {
		if ($_FILES[$this->fieldname]['name'] != ""){
					$consulta = $this->db->prepare("SELECT ".$this->fieldname." from ".$this->tabla." limit 1" );
					$consulta->execute();
					$row2 = $consulta->fetch();
					if ($row2[$this->fieldname] != ""){
						@unlink($this->config->files_dir.$row2[$this->fieldname]);
					}
					$filename_new = generar_nombre_archivo($_FILES[$this->fieldname]['name']);
					copy($_FILES[$this->fieldname]['tmp_name'], $this->config->files_dir.$filename_new);
					
					return $filename_new;
					}
					return '';
	}
	function exec_edit () {
		if ($_FILES[$this->fieldname]['name'] != ""){
						$consulta = $this->db->prepare("SELECT ".$this->fieldname." from ".$this->tabla." where id='".$this->rid."' limit 1" );
						$consulta->execute();
						
						$row2 = $consulta->fetch();
						if ($this->value != ""){
							unlink($this->config->files_dir.$row2[$this->fieldname]);
						}
						$filename_new = generar_nombre_archivo($_FILES[$this->fieldname]['name']);
						copy($_FILES[$this->fieldname]['tmp_name'], $this->config->files_dir.$filename_new);
					
						return $filename_new;
					
		}
		return '';
	}

}


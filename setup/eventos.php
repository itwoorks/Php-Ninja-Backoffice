<?
        
        $table_label = "eventos";
        $default_order = "id ASC";
        $fields= array("accountsId","destacado","titulo_esp","titulo_cat","categoriasId","subcategoriasId","descripcion_esp","descripcion_cat","imagen","lugar","direccion","municipio","fecha_inicio","fecha_fin","dias_semana","hora_inicio","hora_final","precio","telf","email","web","publicado","fecha_registro");
   
	    $fields_to_show= array("destacado","titulo_esp","categoriasId","imagen","lugar","direccion","municipio","fecha_inicio","precio","web","publicado");
        

        $fields_labels= array("accountsId","destacado","título Esp","título Cat","categoría","subcategoría","descripcion Esp","descripcion Cat","imagen","lugar","dirección","municipio","fecha inicio","fecha fín","días semana","hora inicio","hora final","precio","telf","email","web","publicado","fecha_registro");
        
        $fields_types=array("disabled","truefalse","literal","literal","combo","combo_child","textarea","textarea","file_img","literal","literal","literal","fecha","fecha","dias_semana","hora","hora","number","literal","email","url","truefalse","disabled");
        
        
        
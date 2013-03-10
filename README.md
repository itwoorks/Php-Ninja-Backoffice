# Php Ninja BackOffice 3.1


Author: Beto Ayesa  
contacto@phpninja.info  
www.phpninja.info  
Version 3.1  
First Version: 1/7/2008  


Abstract
--------
I am using this custom CMS solution for more than 6 years and tens of projects.  
I believe in technology independece, so I don't want my clients get chainned, this is why I made this Git Repor with MIT License.

This is for you if:
* You are looking for a "Backoffice" Solution that you can install and customize
* You are modifying a website or project done by Php Ninja. Here you will find the information.

Building custom solutions means field by field CMS solutions.
This solution its about making our own field types, so any field type include post and pre process functions before update bd.
  
  Suitable for: small-mid web projects  
  Alternative to: Wordpress, related CMS  
  Perfect for: Graphic Designers projects, or high customization required  
  Biggest Advantage: Field by field customization
  

Installation in 1 minute
------------------------
#### Requirements:
- PHP >=4
- MySQL
- Before building your Bd, make sure that:
* every table has 'id' PRIMARY auto increment FIELD
* Foreign Keys must follow this pattern TABLENAMEID, Example: accounts -> accountsId

#### Steps:  
* Set your own database, general project settings and admin password at config.php
* chmod 777 /setup/ - necesary if you want to auto generate TABLE SETUP files
* Run /install/makeSetups from the browser. All setup files will be created. 
* Goto your http:// 
* Login with your user / pass
* You will be able to view your db data, add, edit or delete fields
 
Customization
-------------

#### Adding New Field Types
* go to /lib/fields
* Duplicate an existing file, and set the field type's name as a filename. Example: Truefalse, Tags
* WARNING: dont use php core functions as field type name's.
* edit field.php, add a line: include "YOURFILE.php"; so your class will be available.
* Open your new duplicate field type.
* Modify as you want.

You have this variables available:
* $this->fieldname
* $this->value  


Example of Field Type PASSWORD. /lib/fields/password.php:
<pre>
final class password extends field{
        function view(){
           return "Password encriptado md5";
        }
        function bake_field (){
           return "<input type=\"text\" cols=\"120\" id=\"".$this->fieldname."\" name=\"".$this->value."\" value=\"\">
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
</pre>

#### Customizing tables/fields (SETUPS files)

* Check available field types at /lib/fields , or create new ones.
* Go to /setups/
* Open the php file of the table you want to modify
* Modify the Array table definitions  
  
Example of Table File:
<pre>
$table_label = "Usuarios";
$default_order = "id ASC";
$fields= array("email","username","password","nombre","apellidos","fecha_nacimiento","empresa","telf","direccion","municipio","provincia","codigopostal");
$fields_to_show = array("email","nombre","apellidos","empresa","telf","direccion","municipio","provincia","codigopostal");
$fields_labels= array("email","username","password","nombre","apellidos","fecha nacimiento","empresa","telf","direccion","municipio","provincia","código postal");
$fields_types=array("email","literal","password","literal","literal","fecha","literal","literal","text","literal","literal","codigopostal");  
</pre>

How does it work?
-----------------
Controllers: /controllers/  

#### formController
*  Build
*  Update
*  Delete  

#### showController
*  Table

Example:

1.  First you create alternative db field types definitions - /setup/ php files. You can edit every single file to check fields labels, fields types and table label,  
so the program will automatically generate forms, tables and update querys, based on the information in /setups for each table.
2.  You go by http://yourpoject/show/table/accounts (example)
3.  Your /setup file is read, and a table with your fields will be generated, post processing every field value.
4.  You can add new element or edit one.
5.  http://yourproject/form/build/accounts  a new form will be generated.



#### License 1/3/2013
MIT License - fork, modify and use however you want.






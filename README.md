# Php Ninja BackOffice 3.1


Beto Ayesa,  @php_ninja
contacto@phpninja.info  
www.phpninja.info  
Version 3.1  
First Version: 1/7/2008  

Introduction
------------
I am using this custom CMS solution for more than 6 years in tens of projects.  
I believe in technology independence, I don't want my clients get caught, this is why I made this Git Repo under MIT License.

This is for you if:
* You are looking for a "Backoffice" Solution that you can install and customize
* You are modifying a website or project done by Php Ninja. Here you will find the information.

#### Features
* Built with Twitter Bootstrap
* jQuery UI
* MVC Php
* Suitable for: small-mid web projects  
* Alternative to: Wordpress, related CMS  
* Perfect for: Graphic Designers projects, or high customization required  
* Biggest Advantage: Field by field customization
  

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
* Change permissions chmod 777 in file /setup/ - necesary if you want to auto generate TABLE SETUP files
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

You have this 4 methods for each FIELD:
* view() -> show the value
* bake_field() -> make the field's HTML 
* exec_add() -> post processing of the value before updating db
* exec_edit() -> post processing of the value before updateing db
 
Two variables:
* $this->fieldname  -> FIELD NAME, also FORM INPUT NAME
* $this->value -> value for that field  



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
 
Arrays:  
* fields: Array containing all db field names 
* fields_to_show: array containing fields that will show up when listing all registrys. Default empty = All
* fields_labels: Labels to show on headers and input labels
* fields_types: Array containing each field type.  
 
So we have that first field is email, it will show up because it's inside fields_to_show array, the label will
be same but with capital letter and -, and the type of this field is "email". So, before updating this field it will be
validated as an email.  

  
Example of Table File:
<pre>
$table_label = "Usuarios";
$default_order = "id ASC";
$fields= array("email","username","password","nombre","apellidos","fecha_nacimiento","empresa","telf","direccion","municipio","provincia","codigopostal");
$fields_to_show = array("email","nombre","apellidos","empresa","telf","direccion","municipio","provincia","codigopostal");
$fields_labels= array("E-mail","username","password","nombre","apellidos","fecha nacimiento","empresa","telf","direccion","municipio","provincia","código postal");
$fields_types=array("email","literal","password","literal","literal","fecha","literal","literal","text","literal","literal","codigopostal");  
</pre>


License 1/3/2013
----------------
MIT License - fork, modify and use however you want.






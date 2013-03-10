# Php Ninja BackOffice 3.1


Author: Beto Ayesa  
First Version: 1/7/2008  
contacto@phpninja.info  
www.phpninja.info


Abstract
--------
I am using this custom CMS solution for more than 6 years and tens of projects.  
I believe in technology independece, so I don't want my clients get chainned, this is why I made this Git Repor with MIT License.

This is for you if:
* You are looking for a "Backoffice" Solution that you can install and customize
* You are modifying a website or project done by Php Ninja. Here you will find the information.

Building custom solutions means field by field CMS solutions.
This solution its about making our own field types, so any field type include post and pre process functions before update bd.
Example:

Installation
------------
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

Example of Field File:

#### Customizing tables/fields 
Any field type wasn't detected properly?
* check available field types at /lib/fields , 
* Go to /setups/
* Open the php file of the table you want to modify
* modify the Array table definitions
Example of Table File:

How does it work?
-----------------
Then you can edit every single file to check fields labels, fields types and table label.
After that, you can map field by field at /setup/TABLE_NAME.php
setting custom fi-eld types for every field,
so the program will automatically generate forms, tables and update querys, based on the information in /setups for each table.


#### License 1/3/2013
MIT License - fork, modify and use however you want.






<?php
   /*
	* Copyright European Union 2002-2010
	*
	*
	* Licensed under the EUPL, Version 1.1 or � as soon they 
	* will be approved by the European Commission - subsequent  
	* versions of the EUPL (the "Licence"); 
	* You may not use this work except in compliance with the 
	* Licence. 
	* You may obtain a copy of the Licence at: 
	*
	* http://ec.europa.eu/idabc/eupl.html
	*
	*  
	* Unless required by applicable law or agreed to in 
	* writing, software distributed under the Licence is 
	* distributed on an "AS IS" basis, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either 
	* express or implied. 
	* See the Licence for the specific language governing 
	* permissions and limitations under the Licence. 
	*
	*/
/* @var string 
 * The MySQL server address.
 * */
$db_host     = "localhost";

/* @var string 
 * The MySQL server user.
 * If you change the DB username you need to change it here also. 
 * */
$db_user     = "xxxxxx";


/* @var string
 * The MySQL server password.
 * If you change the DB password for the given username, you need to change it here also.
 *  */
$db_password = "xxxxxx";

$link = mysql_connect($db_host,$db_user,$db_password);

if (!$link) {
	die("Could not connect: ".mysql_error().'<br/><center><a href="index.html">Go Back</a></center>');
}
/* Select the Database to connect. If you change the DB name in My SQL server you need to change it here also.
 */
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db("cvxml",$link);

include('xml2db.php');
?>
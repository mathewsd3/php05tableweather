<?php
define('IMG_PATH', 'images/');

define('FILENAME_K', 'filename');
define('ALT_K', 'alt');
define('TEMPS_K', 'temps');

$previsions = array(
'2018-02-11' => array(
FILENAME_K => 'degagement.gif',
ALT_K => 'icone degaement',
TEMPS_K => '-17ºC',
),
'2018-02-12' => array(
FILENAME_K => 'soleil_nuage.gif',
ALT_K => 'icone soleil et nuage',
TEMPS_K => '-11ºC',
),
'2018-02-13' => array(
FILENAME_K => 'neige.gif',
ALT_K => 'icone de neige',
TEMPS_K => '-12ºC',
),
'2018-02-14' => array(
FILENAME_K => 'soleil.gif',
ALT_K => 'icone soleil',
TEMPS_K => '-15ºC',
),
'2018-02-15' => array(
FILENAME_K => 'neige.gif',
ALT_K => 'icone de neige',
TEMPS_K => '-11ºC',
),
'2018-02-16' => array(
FILENAME_K => 'soleil.gif',
ALT_K => 'icone soleil',
TEMPS_K => '-15ºC',
),
);


$string='';


//1st loop on the main array
foreach($previsions as $key=>$val)
{
	
	$string.='<tr>';

	$string.='<td>';
	$string.=' '.$key.' ';
	$string.='</td>';

	
	foreach($val as $key=>$val)
	{
		//echo ' - : '.$key.' - '.$val.'<br>';
		
		if($key == FILENAME_K)
		{
			$string.='<td>';
			//echo IMG_PATH.$val;
			$string.='<img src = "'.IMG_PATH.$val.'" ';
		}
		if($key == ALT_K)
		{
			$string.=' alt = "'.$val.'" >';
			$string.='</td>';
		}
		

		if($key == TEMPS_K)
		{
			$string.='<td>';
			$string.=$val;
			$string.='</td>';			
		}
	}
	
	
	$string.='</tr>';
	
	
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="utf-8" />
<title>Weather Table</title>
</head>

<body>
<div>
<header>
<h1>Weather Table</h1>
</header>
<main>
<table>

<thead>
<tr>
<th>Date</th>
<th>Image</th>
<th>Degrees</th>
</tr>
</thead>

<tbody>
<?php

echo $string;

?>

</tbody>

<tfoot>

</tfoot>


</table>
</main>
</div>

</body>

</html>
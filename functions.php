namespace HelpLib;



function Aprint($var, $html = true)
{
	if (!$html) {
		print_r($var);
		return;
	} 
	echo "<br>";
	echo "<pre>";
	print_r($var);
	echo "</pre>";
	echo "</br>";
}
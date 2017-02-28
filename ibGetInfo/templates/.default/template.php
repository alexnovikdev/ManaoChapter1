<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult as $key => $value) {
			echo $key . " ";
			foreach ($value[0] as $prop => $item) {
							 echo $prop . ": " . $item . " ";
			}
			echo "<hr/>";
}

?>

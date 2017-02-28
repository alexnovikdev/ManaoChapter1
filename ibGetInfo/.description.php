<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array("NAME" => "ibGetInfo",
								"DESCRIPTION" => GetMessage("Выводим массив"),
								"PATH" => array(
									"ID" => "dv_components",
									"CHILD" => array(
										"ID" => "ibGetInfo",
										"NAME" => "Мой компонент"
										)
								)
								);
?>
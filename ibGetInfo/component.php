<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_ID"] = 28;

if($this->startResultCache(false, array(($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))) {

	$arResult = array();

	if(CModule::IncludeModule("iblock")) {

		$arOrder = Array("SORT"=>"ASC");
		$arFilter = Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
		$arGroupBy = false;
		$arNavStartParams = false;
		$arSelectFields = Array("ID", "IBLOCK_ID", "NAME","PROPERTY_PROP_CLIENT", "PROPERTY_COMPANY", "PROPERTY_GROUP");

		$elements = CIBlockElement::GetList($arOrder, $arFilter, $arGroupBy, $arNavStartParams, $arSelectFields);

		$asOrder = false;
		$asFilter = array();

		while($obj = $elements->GetNextElement()) {

			//$fields = $obj->GetFields();
			$fields = $obj->GetFields();
			$fieldName = $fields["NAME"];
			$props = $obj->GetProperties();
			$arResult[$fieldName][] = array(
				$props["PROP_CLIENT"]["NAME"] => $props["PROP_CLIENT"]["VALUE"],
				$props["COMPANY"]["NAME"] => $props["COMPANY"]["VALUE"],
				$props["GROUP"]["NAME"] => $props["GROUP"]["VALUE"]
			);

		}
	}
	//$this->IncludeComponentTemplate();
}
return $arResult;
?>

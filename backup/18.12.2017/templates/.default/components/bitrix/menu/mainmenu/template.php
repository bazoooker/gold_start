<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult as $arItem):?>
<?
	if($arItem['DEPTH_LEVEL']==1) {
		if ($arItem["SELECTED"]) {
?>
			<li class="active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?
		} else {
?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?
		}
	}
?>
<?endforeach?>

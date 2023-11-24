<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
    return;

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "GROUP_LIST_HEADER" => array(
            "NAME" => GetMessage("GROUP_LIST_HEADER_NAME"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => GetMessage("GROUP_LIST_HEADER_NAME_DEFAULT"),
        ),
        "SEF_MODE" => array(
            "list" => array(
                "NAME" => GetMessage("T_IBLOCK_SEF_PAGE_NEWS"),
                "DEFAULT" => "",
                "VARIABLES" => array(),
            ),
            "detail" => array(
                "NAME" => GetMessage("T_IBLOCK_SEF_PAGE_NEWS_DETAIL"),
                "DEFAULT" => "",
                "VARIABLES" => array(),
            ),
        ),
        "CACHE_TIME"  =>  Array("DEFAULT"=>36000000),
        "CACHE_FILTER" => array(
            "PARENT" => "CACHE_SETTINGS",
            "NAME" => GetMessage("BN_P_CACHE_FILTER"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
        ),
        "CACHE_GROUPS" => array(
            "PARENT" => "CACHE_SETTINGS",
            "NAME" => GetMessage("CP_BN_CACHE_GROUPS"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
        ),
    ),
);
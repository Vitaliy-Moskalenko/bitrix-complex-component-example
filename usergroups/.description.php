<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("USERGROUPS_NAME"),
    "DESCRIPTION" => GetMessage("USERGROUPS_DESCRIPTION"),
    "ICON" => "/images/groups_all.gif",
    "COMPLEX" => "Y",
    "PATH" => array(
        "ID" => "usergroups",
        "CHILD" => array(
            "ID" => "usergroups",
            "NAME" => GetMessage("USERGROUPS_NAME"),
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "usergroups_cmpx",
            ),
        ),
    ),
);
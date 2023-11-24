<?$APPLICATION->IncludeComponent(
    "kompot:usergroups.list",
    "",
    array(
        "GROUP_LIST_HEADER" => $arParams["GROUP_LIST_HEADER"],
        "NEWS_COUNT" => "20",
        "FIELD_CODE" => array(),
        "SORT_BY1" =>  $arParams["SORT_BY1"],
        "SORT_ORDER" =>  $arParams["SORT_ORDER_1"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"]
    ),
    $component
);

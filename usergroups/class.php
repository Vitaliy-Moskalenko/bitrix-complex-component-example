<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class UsergroupsComponent extends CBitrixComponent {

    protected array $arComponentVariables = [
        "GROUP_ID",
        "GROUP_CODE",
    ];

    public function executeComponent() {
        $this->includeComponentLang('class.php');

        if ($this->arParams["SEF_MODE"] === "Y")
            $componentPage = $this->sefMode();
        else
            $componentPage = $this->noSefMode();

        if(!$componentPage)
            $componentPage = "list";

        $this->IncludeComponentTemplate($componentPage);
    }

    protected function sefMode() {
        $arDefaultVariableAliases404 = [];

        $arDefaultUrlTemplates404 = [
            "list" => "",
            "detail" => "#GROUP_ID#/",
        ];

        $arVariables = [];

        $engine = new CComponentEngine($this);

        $arUrlTemplates = CComponentEngine::makeComponentUrlTemplates($arDefaultUrlTemplates404, $this->arParams["SEF_URL_TEMPLATES"]);
        $arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases404, $this->arParams["VARIABLE_ALIASES"]);

        $componentPage = $engine->guessComponentPath($this->arParams["SEF_FOLDER"], $arUrlTemplates, $arVariables);

        if (!$componentPage)
            $componentPage = 'list';

        CComponentEngine::initComponentVariables($componentPage, $this->arComponentVariables, $arVariableAliases, $arVariables);

        $this->arResult = array(
            "FOLDER" => $this->arParams["SEF_FOLDER"],
            "URL_TEMPLATES" => $arUrlTemplates,
            "VARIABLES" => $arVariables,
            "ALIASES" => $arVariableAliases,
        );

        return $componentPage;
    }

    protected function noSefMode()  {
        $componentPage = "";
        $arVariables = [];
        $arDefaultVariableAliases = [];

        $arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases, $this->arParams["VARIABLE_ALIASES"]);
        CComponentEngine::initComponentVariables(false, $this->arComponentVariables, $arVariableAliases, $arVariables);

        if(isset($arVariables["GROUP_ID"]) && intval($arVariables["GROUP_ID"]) > 0)
            $componentPage = "detail";
        elseif(isset($arVariables["GROUP_CODE"]) && $arVariables["GROUP_CODE"] <> '')
            $componentPage = "detail";
        else
            $componentPage = "list";

        $this->arResult = array(
            "FOLDER" => "",
            "URL_TEMPLATES" => array(
                "list" => htmlspecialcharsbx($APPLICATION->GetCurPage()),
                "detail" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arVariableAliases["GROUP_ID"]."=#GROUP_ID#"),
            ),
            "VARIABLES" => $arVariables,
            "ALIASES" => $arVariableAliases
        );

        return $componentPage;
    }
}
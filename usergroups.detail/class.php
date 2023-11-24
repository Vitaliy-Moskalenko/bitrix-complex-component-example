<?

use Bitrix\Main\UI\Extension;
Extension::load('ui.bootstrap4');


class UsergroupsDetail extends CBitrixComponent {

    public function executeComponent() {
        $this->includeComponentLang('class.php');

        $dbGroup = \Bitrix\Main\GroupTable::getById($this->arParams["GROUP_ID"]);

        if($group = $dbGroup->Fetch())
            $this->arResult["GROUP"] = $group;

		$this->includeComponentTemplate();
    }
};

























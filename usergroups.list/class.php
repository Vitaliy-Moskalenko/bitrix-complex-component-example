<?

use Bitrix\Main\UI\Extension;
Extension::load('ui.bootstrap4');


class UsergroupsList extends CBitrixComponent {

    public function executeComponent() {
        $this->includeComponentLang('class.php');

        $dbGroups = \Bitrix\Main\GroupTable::getList();

        while ($arGroup = $dbGroups->fetch()) {
            $res[] = $arGroup;
        }

        $this->arResult["ITEMS"] = $res;

		$this->includeComponentTemplate();
    }
};

























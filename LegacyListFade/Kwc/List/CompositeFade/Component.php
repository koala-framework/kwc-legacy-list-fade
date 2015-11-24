<?php
class LegacyListFade_Kwc_List_CompositeFade_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Fade');
        $ret['assetsDefer']['dep'][] = 'LegacyListFadeKwfList';

        $ret['selector'] = '> div';

        return $ret;
    }

    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['selector'] = $this->_getSetting('selector');
        return $ret;
    }
}

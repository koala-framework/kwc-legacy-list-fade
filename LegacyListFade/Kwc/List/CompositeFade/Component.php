<?php
class LegacyListFade_Kwc_List_CompositeFade_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlKwfStatic('Fade');
        $ret['assetsDefer']['dep'][] = 'LegacyListFadeKwfList';

        $ret['selector'] = '> div';

        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        $ret['selector'] = $this->_getSetting('selector');
        return $ret;
    }
}

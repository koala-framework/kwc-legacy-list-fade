<?php
abstract class LegacyListFade_Kwc_List_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlKwfStatic('Fade images');
        $ret['assetsDefer']['dep'][] = 'LegacyListFadeKwfList';

        // $ret['generators']['child']['component'] muss gesetzt werden

        $ret['selector'] = '> div';

        // optional: wird ausgeblendet wenn nur ein fade-element existiert
        // und das hier angegebene element keinen inhalt hat
        $ret['textSelector'] = '';

        $ret['fadeConfig'] = array(
            'elementAccessDirect' => false, // a button for each element to acces
            'elementAccessPlayPause' => false, // a play pause button to break fade-switching
            //'elementAccessLinks' => false, // deprecated, sets both of above
            'elementAccessNextPrevious' => false, // a previous and next button to switch pictures
            'fadeDuration'       => 1.5,
            'fadeEvery'          => 7,
            'easingFadeOut'      => 'easeInQuad',
            'easingFadeIn'       => 'easeOutQuad',
            'startRandom'        => true,
//             'animationType'      => ['', 'slide'],
            'autoStart'          => true,
//             'direction'          => ['left'|'right'],
            'template' => false
        );

        $ret['fadeClass'] = 'Kwf.Fade.Elements';

        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        $ret['selector'] = $this->_getSetting('selector');
        $ret['textSelector'] = $this->_getSetting('textSelector');
        $ret['fadeConfig'] = $this->_getSetting('fadeConfig');
        $ret['fadeClass'] = $this->_getSetting('fadeClass');
        if (isset($ret['fadeConfig']['template']) && $ret['fadeConfig']['template']) {
            $ret['fadeConfig']['template'] = $this->getData()->trlStaticExecute($ret['fadeConfig']['template']);
        }
        return $ret;
    }
}

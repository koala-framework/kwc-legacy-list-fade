<div class="<?=$this->rootElementClass?> <?=$this->bemClass('kwfFadeElements')?> kwfUp-kwfFadeElements">
    <? /* fadeSelector ist pflicht, alles andere optional */ ?>
    <input type="hidden" name="fadeSelector" class="kwfUp-fadeSelector" value="<?= $this->selector; ?>" />
    <input type="hidden" name="textSelector" class="kwfUp-textSelector" value="<?= $this->textSelector; ?>" />
    <input type="hidden" name="fadeConfig" class="kwfUp-fadeConfig" value="<?= htmlspecialchars(Zend_Json::encode($this->fadeConfig)); ?>" />
    <input type="hidden" name="fadeClass" class="kwfUp-fadeClass" value="<?= $this->fadeClass; ?>" />

    <? $i = 0; ?>
    <? foreach ($this->children as $child) { ?>
        <?
            $class = '';
            if ($i == 0) $class .= 'subComponents--kwcFirst ';
            if ($i == count($this->children)-1) $class .= 'subComponents--kwcLast ';
            if ($i % 2 == 0) {
                $class .= 'subComponents--kwcEven ';
            } else {
                $class .= 'subComponents--kwcOdd ';
            }
            $class = trim($class);
            $i++;
        ?>
        <div class="<?=$this->bemClass('subComponents')?> <?=$this->bemClass($class)?> kwfUp-kwfFadeElement">
            <?=$this->component($child);?>
        </div>
    <? } ?>
</div>

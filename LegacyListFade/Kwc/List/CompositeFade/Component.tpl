<div class="<?=$this->rootElementClass?> kwfUp-kwfFadeElements">
    <input type="hidden" name="fadeSelector" class="kwfUp-fadeSelector" value="<?= $this->selector; ?>" />

    <? foreach($this->keys as $k) { ?>
        <?=$this->component($this->$k)?>
    <? } ?>
</div>

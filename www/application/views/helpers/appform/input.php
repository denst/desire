<div class="control-group <?=$error_class?>">
    <div class="controls">
        <?=Kohana_Form::input($name, $value, $attributes)?>
        <span class="help-inline error-message"><?=$error_message?></span>
    </div>
</div>
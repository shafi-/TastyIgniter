<?php
$on = $field->config['on'] ?? 'admin::default.text_enabled';
$off = $field->config['off'] ?? 'admin::default.text_disabled';
$onColor = $field->config['onColor'] ?? 'success';
$offColor = $field->config['offColor'] ?? 'danger';
$labelWith = $field->config['labelWith'] ?? '200';
?>
<input
    type="hidden"
    name="<?= $field->getName() ?>"
    value="0"
    <?= $this->previewMode ? 'disabled="disabled"' : '' ?>>

<div
    class="field-switch"
    data-control="switch"
    style="width: <?= e($labelWith) ?>px;"
>
    <input
        type="checkbox"
        name="<?= $field->getName() ?>"
        id="<?= $field->getId() ?>"
        class="field-switch-input"
        value="1"
        <?= $this->previewMode ? 'disabled="disabled"' : '' ?>
        <?= $field->value == 1 ? 'checked="checked"' : '' ?>
        <?= $field->getAttributes() ?>
    >
    <label
        class="field-switch-label"
        for="<?= $field->getId() ?>"
    >
        <span class="field-switch-container">
            <span class="field-switch-active">
                <span class="field-switch-toggle bg-<?= e($onColor) ?>"><?= e(lang($on)) ?></span>
            </span>
            <span class="field-switch-inactive">
                <span class="field-switch-toggle bg-<?= e($offColor) ?>"><?= e(lang($off)) ?></span>
            </span>
        </span>
    </label>
</div>
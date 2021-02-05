<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        <button class="btn btn-default">Hello</button>
        You may customize this page by editing the following file:11111<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>

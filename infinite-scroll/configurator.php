<?php $c_infinite_scroll = $config->states->{'plugin_' . md5(File::B(__DIR__))}; ?>
<fieldset>
  <legend><?php echo $speak->plugin_infinite_scroll->title->type; ?></legend>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->type; ?></span>
    <span class="grid span-5"><?php echo Form::select('type', (array) $speak->plugin_infinite_scroll->title->types, $c_infinite_scroll->type); ?></span>
  </label>
</fieldset>
<fieldset>
  <legend><?php echo $speak->plugin_infinite_scroll->title->target; ?></legend>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->posts; ?></span>
    <span class="grid span-5"><?php echo Form::text('target[posts]', $c_infinite_scroll->target->posts, '.posts'); ?></span>
  </label>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->post; ?></span>
    <span class="grid span-5"><?php echo Form::text('target[post]', $c_infinite_scroll->target->post, '.post'); ?></span>
  </label>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->links; ?></span>
    <span class="grid span-5"><?php echo Form::text('target[anchors]', $c_infinite_scroll->target->anchors, '.anchors'); ?></span>
  </label>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->link; ?></span>
    <span class="grid span-5"><?php echo Form::text('target[anchor]', $c_infinite_scroll->target->anchor, '.anchor'); ?></span>
  </label>
</fieldset>
<fieldset>
  <legend><?php echo $speak->plugin_infinite_scroll->title->text; ?></legend>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->load; ?></span>
    <span class="grid span-5"><?php echo Form::textarea('text[load]', $c_infinite_scroll->text->load, '<a class="js-load" href="javascript:;">' . $speak->load . ' ' . $speak->more . '</a>', array('class' => array('textarea-block', 'code'))); ?></span>
  </label>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->loading; ?></span>
    <span class="grid span-5"><?php echo Form::textarea('text[loading]', $c_infinite_scroll->text->loading, '<span class="js-loading">' . $speak->loading . '…</span>', array('class' => array('textarea-block', 'code'))); ?></span>
  </label>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->loaded; ?></span>
    <span class="grid span-5"><?php echo Form::textarea('text[loaded]', $c_infinite_scroll->text->loaded, '<span class="js-loaded">' . $speak->loaded . '.</span>', array('class' => array('textarea-block', 'code'))); ?></span>
  </label>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->error; ?></span>
    <span class="grid span-5"><?php echo Form::textarea('text[error]', $c_infinite_scroll->text->error, '<a class="js-error" href="javascript:;">' . $speak->error . '.</span>', array('class' => array('textarea-block', 'code'))); ?></span>
  </label>
</fieldset>
<p><?php echo Jot::button('action', $speak->update); ?></p>
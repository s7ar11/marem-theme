<div class="sidebar">
    <h2> <?php _e('Catigories') ?> </h2>
    <ul>
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchial=0'); ?>
    </ul>
    <h2> <?php _e('Archives') ?> </h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>
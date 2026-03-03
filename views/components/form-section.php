<div class="border-t border-zinc-200 mt-6 pt-6">
    <h3 class="text-lg font-semibold text-zinc-900"><?= $form_title ?? '' ?></h3>
    <div class="text-zinc-400"><?= $form_subtitle ?? '' ?></div>
    <?php component($inner_component, $inner_data ?? []); ?>
</div>
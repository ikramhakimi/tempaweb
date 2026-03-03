<?php 
require __DIR__ . '/includes/functions.php';

layout('header'); 
?>
<!-- Content -->
<main class="flex-1 p-6">
  <div class="max-w-5xl mx-auto">
    <?php component('page-header', [
      'page_title' => 'Pilih Tema Anda',
      'page_description' => 'Setiap tema direka khas untuk memberikan pengalaman studio Raya yang unik dan berkesan.'
    ]); ?>
    
    <section class="grid grid-cols-1 md:grid-cols-6 gap-5">
      <!-- Cards -->
      <div class="md:col-span-2">
        <?php component('card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('card-theme'); ?>
      </div>
    </section>
  </div>
</main>
<?php layout('footer'); ?>

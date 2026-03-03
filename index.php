<?php 
require __DIR__ . '/includes/functions.php';

layout('header'); 
?>
<!-- Content -->
<main class="flex-1 p-6">
  <div class="max-w-5xl mx-auto">
    <section class="text-center my-10">
      <h1 class="text-4xl font-bold text-zinc-900">Pilih Tema Anda</h1>
      <p class="mt-2 text-zinc-600">Setiap tema direka khas untuk memberikan pengalaman studio Raya yang unik dan berkesan.</p>
    </section>
    <section class="grid grid-cols-1 md:grid-cols-6 gap-5">
      <!-- Cards -->
      <div class="md:col-span-2">
        <?php component('cards/card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('cards/card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('cards/card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('cards/card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('cards/card-theme'); ?>
      </div>
      <div class="md:col-span-2">
        <?php component('cards/card-theme'); ?>
      </div>
    </section>
  </div>
</main>
<?php layout('footer'); ?>

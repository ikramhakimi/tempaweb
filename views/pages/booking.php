    <?php component('page-header', [
      'page_title' => 'Jadualkan Sesi Anda',
      'page_description' => 'Pilih tarikh, slot masa, dan jumlah kehadiran yang anda inginkan.'
    ]); ?>
    <form class="max-w-[680px] mx-auto">
      <?php component('form-studio'); ?>
      
      <?php component('form-section', [
        'form_title' => 'Pilih Tarikh',
        'form_subtitle' => 'Pilih tarikh yang anda inginkan untuk sesi studio.',
        'inner_component' => 'form-date'
      ]); ?>

      <?php component('form-section', [
        'form_title' => 'Pilih Masa',
        'form_subtitle' => 'Pilih masa yang anda inginkan untuk sesi studio. Setiap slot adalah 15 minit.',
        'inner_component' => 'form-hour'
      ]); ?>

      <?php component('form-section', [
        'form_title' => 'Bilangan Peserta',
        'form_subtitle' => 'Pilih bilangan peserta untuk sesi studio ini.',
        'inner_component' => 'form-pax'
      ]); ?>

      <?php component('form-section', [
        'form_title' => 'Maklumat Pelanggan',
        'form_subtitle' => 'Sila isi maklumat diri anda untuk berhubung.',
        'inner_component' => 'form-contact'
      ]); ?>

      <div class="border-t border-zinc-200 mt-6 pt-6">
        <a href="<?= url('confirm') ?>" class="block w-full rounded-md bg-zinc-900 px-4 py-3 font-medium text-white text-center transition hover:bg-indigo-600">
          Sahkan Tempahan
        </a> 
      </div>
    </form>

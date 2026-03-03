<?php 
require __DIR__ . '/includes/functions.php';

layout('header'); 
?>
<!-- Content -->
<main class="flex-1 p-5">
  <div class="max-w-5xl mx-auto">
    <section class="text-center my-10">
      <h1 class="text-4xl font-bold text-zinc-900">Pembayaran</h1>
      <p class="mt-2 text-zinc-600">Pilih kaedah pembayaran anda untuk mengesahkan tempahan.</p>
    </section>
    <section class="max-w-[680px] mx-auto">
      <div class="rounded-lg border border-zinc-200 bg-zinc-100 overflow-hidden">
        <div class="rounded-lg bg-white p-6 ring ring-1 ring-zinc-200">
          <h3 class="text-lg font-semibold text-zinc-900">Ringkasan Tempahan</h3>
          <div class="text-zinc-400">Pilih tarikh yang anda inginkan untuk sesi studio.</div>

          <div class="mt-5">
            <div class="md:flex items-center justify-between">
              <div class="text-sm">Studio</div>
              <div class="text-zinc-700">Studio Warisan Emas / RM 150</div>
            </div>
            <div class="md:flex items-center justify-between border-t border-zinc-200 mt-2 pt-2">
              <div class="text-sm">Tarikh / Masa</div>
              <div class="text-zinc-700">Ahad, 15 April 2025 (10:00 am)</div>
            </div>
            <div class="md:flex items-center justify-between border-t border-zinc-200 mt-2 pt-2">
              <div class="text-sm">Bilangan Peserta</div>
              <div class="text-zinc-700">13</div>
            </div>
            <div class="md:flex items-center justify-between border-t border-zinc-200 mt-2 pt-2">
              <div class="text-sm">Nama</div>
              <div class="text-zinc-700">Ikram Hakimi</div>
            </div>
            <div class="md:flex items-center justify-between border-t border-zinc-200 mt-2 pt-2">
              <div class="text-sm">Nombor Telefon</div>
              <div class="text-zinc-700">012-3456789</div>
            </div>
            <div class="md:flex items-center justify-between border-t border-zinc-200 mt-2 pt-2">
              <div class="text-sm">Email</div>
              <div class="text-zinc-700">ikram.hakimi@example.com</div>
            </div>
            <div class="md:flex items-center justify-between border-t border-zinc-200 mt-2 pt-2">
              <div class="text-sm">Jumlah Harga</div>
              <div class="text-zinc-700">RM 180</div>
            </div>
          </div>
        </div>
        <div class="p-5">
          <h3 class="text-lg font-semibold text-zinc-900">Kaedah Pembayaran</h3>
          <div class="grid md:grid-cols-2 gap-4 my-4">
            <!-- Deposit -->
            <label class="block cursor-pointer">
              <input
                type="radio"
                name="payment_option"
                value="deposit"
                class="peer hidden"
                checked
              />

              <div class="
                border border-zinc-200 bg-white rounded-lg p-5
                transition-all duration-200

                hover:border-black hover:shadow-lg

                peer-checked:bg-zinc-900
                peer-checked:border-black
                peer-checked:ring-2
                peer-checked:ring-black
                peer-checked:shadow-xl
              ">
                <div class="flex justify-between items-start mb-3">
                  <div>
                    <h3 class="text-lg font-semibold">Deposit</h3>
                    <p class="text-2xl font-bold mt-1">RM 50</p>
                  </div>
                  <div class="w-5 h-5 rounded-full border-2 border-zinc-300
                              peer-checked:border-4 
                              peer-checked:border-black 
                              peer-checked:bg-black transition"></div>
                </div>

                <p class="text-sm text-zinc-600 mb-3">
                  50% sekarang · 50% pada hari sesi
                </p>

                <p class="text-sm text-zinc-500 leading-relaxed">
                  Bayar deposit untuk menempah studio anda. 
                  Baki bayaran perlu dijelaskan semasa hari sesi.
                </p>
              </div>
            </label>

            <!-- Bayaran Penuh -->
            <label class="block cursor-pointer">
              <input
                type="radio"
                name="payment_option"
                value="full"
                class="peer hidden"
              />

              <div class="
                border border-zinc-200 bg-white rounded-lg p-5
                transition-all duration-200

                hover:border-black hover:shadow-lg

                peer-checked:bg-zinc-900
                peer-checked:border-black
                peer-checked:ring-2
                peer-checked:ring-black
                peer-checked:shadow-xl
              ">
                <div class="flex justify-between items-start mb-3">
                  <div>
                    <h3 class="text-lg font-semibold">Bayaran Penuh</h3>
                    <p class="text-2xl 
                              font-bold 
                              peer-checked:text-zinc-300
                              mt-1">RM 180</p>
                  </div>
                  <div class="w-5 h-5 rounded-full border-2 border-zinc-300 
                              peer-checked:border-black 
                              peer-checked:bg-black transition"></div>
                </div>

                <p class="text-sm text-zinc-600 mb-3">
                  Bayar sekali, tanpa risau
                </p>

                <p class="text-sm text-gray-500 leading-relaxed">
                  Buat bayaran penuh hari ini dan nikmati keutamaan jadual 
                  serta frame digital percuma.
                </p>
              </div>
            </label>
          </div>
          <a href="confirm.php" class="block w-full rounded-md bg-zinc-900 px-4 py-3 font-medium text-white text-center transition hover:bg-indigo-600">
            Sahkan Tempahan
          </a> 
        </div>
      </div>
    </section>
  </div>
</main>
<?php layout('footer'); ?>

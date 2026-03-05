<?php component('page-header', [
    'page_title' => 'Pembayaran',
    'page_description' => 'Tempahan anda telah diterima dan sedang diproses.'
]); ?>

<section class="max-w-[960px] mx-auto">
    <div class="rounded-lg border border-zinc-200 bg-zinc-100 overflow-hidden grid md:grid-cols-6 gap-0">
        <div class="md:col-span-3 rounded-lg bg-white p-6 ring ring-1 ring-zinc-200">
        <div class="flex items-center justify-between border-b border-dashed border-zinc-300 pb-4">
            <div>
            <div class="text-xs uppercase tracking-widest text-zinc-400">Receipt</div>
            <h3 class="text-lg font-semibold text-zinc-900">Booking Submitted</h3>
            </div>
            <div class="text-right">
            <div class="text-xs text-zinc-400">Status</div>
            <div class="inline-flex rounded-full bg-zinc-900 px-3 py-1 text-xs font-medium text-white">
                Pending Payment
            </div>
            </div>
        </div>

        <div class="py-6 border-b border-dashed border-zinc-300">
            <div class="text-xs text-zinc-400 uppercase tracking-wider mb-1">Order Number</div>
            <div class="flex items-center gap-2">
            <div id="order-number" class="font-bold text-zinc-900 break-all">
                SERIRAYA10-260305-000009
            </div>
            <button type="button" id="copy-order-number" class="text-xs rounded-md border border-zinc-300 bg-white px-2 py-1 text-zinc-700 hover:border-zinc-900 hover:text-zinc-900 transition">
                Copy
            </button>
            </div>
            <div id="copy-feedback" class="text-xs text-green-700 mt-1 hidden">Order number copied.</div>
        </div>

        <div class="py-6">
            <div class="text-zinc-900 text-base font-medium mb-2">Tempahan anda berjaya dihantar.</div>
            <p class="text-zinc-600 leading-relaxed">
            Pihak admin akan menghubungi anda dalam masa terdekat untuk urusan pembayaran dan pengesahan akhir.
            Jika anda perlukan bantuan segera, anda boleh hubungi sales kami melalui WhatsApp.
            </p>
        </div>

        <div class="border-t border-dashed border-zinc-300 pt-4">
            <div class="text-sm font-semibold text-zinc-900 mb-2">Butiran Tempahan</div>
            <div class="text-sm text-zinc-600 space-y-1">
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>Studio</span>
                <span class="text-zinc-800">Seri Raya</span>
            </div>
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>Tarikh / Masa</span>
                <span class="text-zinc-800">Mon, 16 Mar 2026 (09:15 AM)</span>
            </div>
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>Bilangan Peserta</span>
                <span class="text-zinc-800">10</span>
            </div>
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>Nama Pelanggan</span>
                <span class="text-zinc-800">SYAIFUL</span>
            </div>
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>No. Telefon</span>
                <span class="text-zinc-800">0192889066</span>
            </div>
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>Email</span>
                <span class="text-zinc-800">hello@world.com</span>
            </div>
            <div class="flex items-center justify-between border-b border-zinc-100 py-1">
                <span>Pelan Bayaran</span>
                <span class="text-zinc-800">Deposit</span>
            </div>
            <div class="flex items-center justify-between py-1 font-semibold">
                <span>Jumlah Harga</span>
                <span class="text-zinc-900">RM 119.00</span>
            </div>
            </div>
        </div>

        <div class="border-t border-dashed border-zinc-300 pt-4 text-sm text-zinc-500 mt-4">
            Sila simpan halaman ini untuk rujukan sehingga pembayaran selesai.
        </div>
        </div>
        <div class="md:col-span-3 p-5">
            <img src="<?= asset('images/qr-duitnow.jpeg') ?>" alt="QR Duitnow" class="w-full h-auto rounded-md" />
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-5 mt-5">
        <a href="https://wa.me/60192889066?text=Hi%20sales%2C%20saya%20nak%20tanya%20tentang%20tempahan%20studio." target="_blank" rel="noopener noreferrer" class="block w-full rounded-md bg-zinc-900 px-4 py-3 font-medium text-white text-center transition hover:bg-green-600">
            WhatsApp Sales
        </a>
        <a href="/" class="block w-full rounded-md bg-white border border-zinc-300 px-4 py-3 font-medium text-zinc-700 text-center transition hover:border-zinc-900 hover:text-zinc-900">
            Back To Store
        </a>
    </div>
</section>

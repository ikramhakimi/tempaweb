<?php
$lat = 3.1570956;
$lng = 101.7265905;

$address = "B-3-3, Holiday Place, Jln Ampang, Taman U Thant, 55000 Kuala Lumpur";
?>

<section class="mt-6">

  

  <!-- Info -->
  <div class="mt-6 bg-white rounded-xl border border-zinc-200">
    <!-- Map -->
    <div class="aspect-[4/2] rounded-lg ring-1 ring-zinc-200 overflow-hidden m-1">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.762911834007!2d101.72659049339293!3d3.157095627775691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc383a007d2ed1%3A0x9df725ba7608571b!2sHoliday%20Place%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1772628830950!5m2!1sen!2smy"
        class="w-full h-full"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <div class="p-6">
        <h3 class="text-lg font-semibold text-zinc-900">
        Our Location
        </h3>

        <p class="mt-2 text-zinc-600 leading-relaxed">
        <?= $address ?>
        </p>

        <div class="mt-4">
        <a id="navBtn"
            target="_blank"
            class="inline-flex items-center px-5 py-2.5 bg-black text-white rounded-lg hover:bg-zinc-800 transition">
            Open Navigation
        </a>
        </div>
    </div>
  </div>

</section>

<script>
  const lat = "<?= $lat ?>";
  const lng = "<?= $lng ?>";

  const googleUrl = `https://www.google.com/maps/search/?api=1&query=${lat},${lng}`;
  const wazeUrl   = `https://waze.com/ul?ll=${lat},${lng}&navigate=yes`;

  const btn = document.getElementById("navBtn");

  const isMobile = /Android|iPhone|iPad|iPod|Mobile/i.test(navigator.userAgent);

  if (isMobile) {
    btn.href = wazeUrl;
    btn.textContent = "Open in Waze";
  } else {
    btn.href = googleUrl;
    btn.textContent = "Open in Google Maps";
  }
</script>
<?php 
require __DIR__ . '/includes/functions.php';

layout('header'); 
?>
<!-- Content -->
<main class="flex-1 p-6">
  <div class="max-w-5xl mx-auto">
    <section class="text-center my-10">
      <h1 class="text-4xl font-bold text-zinc-900">Schedule Your Session</h1>
      <p class="mt-2 text-zinc-600">Select your preferred date, time slot, and number of attendees.</p>
    </section>
    <form class="max-w-[680px] mx-auto">
      <div class="rounded-lg border border-zinc-200 bg-white flex flex-col md:flex-row">
        <div class="aspect-[4/3] overflow-hidden bg-zinc-100 rounded-l-md w-1/3">
            <img 
            src="https://profile.nextapdigital.com/demo/assets/themes/theme_1_6993fc5059950.jpeg"
            alt="Theme Preview"
            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
            />
        </div>
        <div class="p-5">
          <p class="text-xs uppercase tracking-wide text-zinc-500">Theme</p>
          <h3 class="text-xl font-semibold text-zinc-900 mt-2">Studio Warisan Emas</h3>
          <p class="text-lg text-green-600">RM 150 <span class="text-sm text-zinc-500">/ session</span></p>
          <a href="index.php" class="block w-full rounded-md bg-zinc-900 px-4 py-3 mt-5 font-medium text-white text-center transition hover:bg-indigo-600">
            Tukar Studio
          </a>
        </div>
      </div>
      <div class="mt-6">
        <h3 class="text-lg font-semibold text-zinc-900">Pilih Tarikh</h3>
        <div class="text-zinc-400">Pilih tarikh yang anda inginkan untuk sesi studio.</div>
        <div id="dateGridOld" class="grid grid-cols-7 gap-2 mt-4"></div>
      </div>
      <div class="mt-5 hidden">
        <h3 class="text-lg font-semibold text-zinc-900">Pilih Tarikh</h3>
        <div class="text-zinc-400">Pilih tarikh yang anda inginkan untuk sesi studio.</div>
        <div class="rounded-lg border border-zinc-200 bg-white mt-4 p-5">
          <div class="flex items-center justify-between mb-4">
            <h2 id="monthTitle" class="text-lg font-semibold tracking-tight"></h2>
            <div class="flex items-center gap-1">
              <button type="button" id="prevMonth" class="px-3 py-1 border rounded-lg text-sm">
                ← Prev
              </button>
              <button type="button" id="nextMonth" class="px-3 py-1 border rounded-lg text-sm">
                Next →
              </button>
            </div>
          </div>

          <!-- Week Header -->
          <div class="grid grid-cols-7 mb-2 text-sm text-zinc-500">
            <div class="text-center">Isn</div>
            <div class="text-center">Sel</div>
            <div class="text-center">Rab</div>
            <div class="text-center">Kha</div>
            <div class="text-center">Jum</div>
            <div class="text-center">Sab</div>
            <div class="text-center">Ahd</div>
          </div>

          <!-- Date Grid -->
          <div id="dateGrid" class="grid grid-cols-7 gap-y-1"></div>
        </div>
      </div>
      <div class="border-t border-zinc-200 mt-6 pt-6">
        <h3 class="text-lg font-semibold text-zinc-900">Pilih Masa</h3>
        <div class="text-zinc-400">Pilih masa yang anda inginkan untuk sesi studio. Setiap slot adalah 15 minit.</div>
        <div id="timeGrid" class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-1 mt-4"></div>
      </div>
      <div class="border-t border-zinc-200 mt-6 pt-6">
        <h3 class="text-lg font-semibold text-zinc-900">Bilangan Peserta</h3>
        <div class="text-zinc-400">Bilangan peserta untuk sesi studio ini.</div>
        <div class="bg-white inline-flex items-center border border-zinc-300 rounded-md mt-4">
          <button type="button" id="decrease" class="px-4 py-2 rounded-md text-xl bg-zinc-100 hover:bg-zinc-200 m-1">−</button>

          <div
            id="paxDisplay"
            class="w-20 text-center font-semibold"
          >1</div>

          <button type="button" id="increase" class="px-4 py-2 rounded-md text-xl bg-zinc-100 hover:bg-zinc-200 m-1">+</button>
        </div>

        <p id="paxMessage" class="mt-3 text-sm text-gray-600"></p>

        <div class="mt-4 border-t pt-3">
          <div class="text-sm text-gray-600">Total Price</div>
          <div id="totalPrice" class="text-xl font-semibold">RM 150</div>
        </div>
      </div>
      <div class="border-t border-zinc-200 mt-6 pt-6">
        <h3 class="text-lg font-semibold text-zinc-900">Maklumat Pelanggan</h3>
        <div class="text-zinc-400">Sila isi maklumat anda untuk berhubung.</div>
        <div class="grid md:grid-cols-2 gap-4 mt-5">
          <div>
            <label class="block text-sm">Nama Penuh</label>
            <input type="text" class="w-full border border-zinc-300 rounded-md p-2 mt-2" placeholder="Nama Penuh">
          </div>
          <div>
            <label class="block text-sm">Nombor Telefon</label>
            <input type="text" class="w-full border border-zinc-300 rounded-md p-2 mt-2" placeholder="Nombor Telefon">
          </div>
          <div class="col-span-full">
            <label class="block text-sm">Alamat Email</label>
            <input type="text" class="w-full border border-zinc-300 rounded-md p-2 mt-2" placeholder="email@contoh.com">
          </div>
        </div>
        
      </div>
      <div class="border-t border-zinc-200 mt-6 pt-6">
        <a href="confirm.php" class="block w-full rounded-md bg-zinc-900 px-4 py-3 font-medium text-white text-center transition hover:bg-indigo-600">
          Sahkan Tempahan
        </a> 
      </div>
    </form>
  </div>
</main>


<!-- <script>
  const monthTitle = document.getElementById("monthTitle");
  const dateGrid = document.getElementById("dateGrid");
  const prevBtn = document.getElementById("prevMonth");
  const nextBtn = document.getElementById("nextMonth");

  const today = new Date();
  today.setHours(0, 0, 0, 0);

  let currentMonth = new Date(today);

  // Limit: 3 months ahead
  const maxMonth = new Date(today);
  maxMonth.setMonth(today.getMonth() + 2);

  function renderMonth(date) {
    dateGrid.innerHTML = "";

    const monthStart = new Date(date.getFullYear(), date.getMonth(), 1);

    monthTitle.textContent = monthStart.toLocaleDateString("ms-MY", {
      month: "long",
      year: "numeric"
    });

    // Monday start
    const firstDay = monthStart.getDay();
    const diffToMonday = firstDay === 0 ? -6 : 1 - firstDay;
    const gridStart = new Date(monthStart);
    gridStart.setDate(monthStart.getDate() + diffToMonday);

    const gridEnd = new Date(monthStart);
    gridEnd.setMonth(monthStart.getMonth() + 1);
    gridEnd.setDate(0);

    let current = new Date(gridStart);

    while (current <= gridEnd || current.getDay() !== 1) {
      const date = new Date(current);
      const isPast = date < today;
      const isToday = date.getTime() === today.getTime();
      const inMonth = date.getMonth() === monthStart.getMonth();

      const dayNumber = date.getDate();
      const value = date.toISOString().split("T")[0];

      const cell = document.createElement("label");
      cell.className = "block text-center";

      cell.innerHTML = `
        <input
          type="radio"
          name="booking_date"
          value="${value}"
          class="peer hidden"
          ${isPast || !inMonth ? "disabled" : ""}
        />

        <div class="
          h-12 w-12 mx-auto
          flex items-center justify-center
          rounded-xl
          text-sm font-medium
          transition duration-200

          ${isToday ? "border border-black" : ""}

          hover:bg-zinc-100

          peer-checked:bg-black
          peer-checked:text-white

          peer-disabled:text-zinc-300
          peer-disabled:cursor-not-allowed

          ${!inMonth ? "text-zinc-300" : ""}
        ">
          ${dayNumber}
        </div>
      `;

      dateGrid.appendChild(cell);
      current.setDate(current.getDate() + 1);
    }

    // Update button states
    prevBtn.disabled = date.getMonth() === today.getMonth() &&
                      date.getFullYear() === today.getFullYear();

    nextBtn.disabled = date >= maxMonth;
  }

  prevBtn.addEventListener("click", () => {
    currentMonth.setMonth(currentMonth.getMonth() - 1);
    renderMonth(currentMonth);
  });

  nextBtn.addEventListener("click", () => {
    currentMonth.setMonth(currentMonth.getMonth() + 1);
    renderMonth(currentMonth);
  });

  renderMonth(currentMonth);
</script> -->
<script>
  const dateGrid = document.getElementById("dateGridOld");
  const today = new Date();
  today.setHours(0, 0, 0, 0);

  const totalDaysToShow = 33; // future days count

  // Get start of week (Monday)
  const startOfWeek = new Date(today);
  const day = startOfWeek.getDay(); 
  const diffToMonday = day === 0 ? -6 : 1 - day; // if Sunday, go back 6 days
  startOfWeek.setDate(startOfWeek.getDate() + diffToMonday);

  const endDate = new Date(today);
  endDate.setDate(today.getDate() + totalDaysToShow);

  let current = new Date(startOfWeek);

  while (current <= endDate) {
    const date = new Date(current);
    const isPast = date < today;

    const dayName = date.toLocaleDateString("ms-MY", { weekday: "short" });
    const dayNumber = date.getDate();
    const monthName = date.toLocaleDateString("ms-MY", { month: "short" });
    const value = date.toISOString().split("T")[0];

    const wrapper = document.createElement("label");
    wrapper.className = "block";

    wrapper.innerHTML = `
      <input 
        type="radio" 
        name="booking_date"
        value="${value}"
        class="peer hidden"
        ${isPast ? "disabled" : ""}
      />

      <div class="
        relative
        border border-zinc-200 bg-white
        rounded-md p-2
        flex flex-col items-center justify-center
        text-zinc-700
        transition-all duration-200
        uppercase
        ring-0

        hover:border-zinc-900 
        hover:cursor-pointer
        hover:ring-1
        hover:ring-zinc-900

        peer-checked:bg-zinc-900 
        peer-checked:text-white 
        peer-checked:border-zinc-900
        peer-checked:shadow-xl
        perr-checked:ring-1
        peer-checked:ring-zinc-900

        peer-disabled:bg-zinc-100
        peer-disabled:text-zinc-400
        peer-disabled:border-zinc-200
        peer-disabled:shadow-none
        peer-disabled:cursor-not-allowed
        peer-disabled:ring-0
      ">
        <span class="text-xs text-zinc-500 tracking-wider peer-checked:text-white peer-disabled:text-zinc-400 uppercase">
          ${dayName}
        </span>
        <span class="text-2xl font-bold tracking-wider leading-8">
          ${dayNumber}
        </span>
        <span class="text-xs text-zinc-400 peer-checked:text-white peer-disabled:text-zinc-400">
          ${monthName}
        </span>
      </div>
    `;

    dateGrid.appendChild(wrapper);
    current.setDate(current.getDate() + 1);
  }
</script>

<script>
  const timeGrid = document.getElementById("timeGrid");

  // Example: booked slots (24-hour format)
  const bookedSlots = [
    "09:00",
    "15:00",
    "18:00"
  ];

  // Generate slots from 09:00 → 23:00
  for (let hour = 9; hour <= 23; hour++) {
    const time24 = `${String(hour).padStart(2, "0")}:00`;
    const timeLabel = formatTime(hour);
    const isBooked = bookedSlots.includes(time24);

    const wrapper = document.createElement("label");
    wrapper.className = "block";

    wrapper.innerHTML = `
      <input
        type="radio"
        name="time_slot"
        value="${time24}"
        class="peer hidden"
        ${isBooked ? "disabled" : ""}
      />

      <div class="
        border border-zinc-200 bg-white
        rounded-md p-3
        text-center
        transition-all duration-200

        hover:border-zinc-900 
        hover:cursor-pointer
        hover:ring-1
        hover:ring-zinc-900
        hover:text-zinc-900

        peer-checked:bg-zinc-900
        peer-checked:text-white
        peer-checked:border-zinc-900 
        peer-checked:shadow-lg
        peer-checked:ring-0
        peer-checked:ring-zinc-900

        peer-disabled:bg-zinc-100
        peer-disabled:text-zinc-400
        peer-disabled:border-zinc-200
        peer-disabled:shadow-none
        peer-disabled:cursor-not-allowed
        peer-disabled:ring-0
      ">
        ${timeLabel}
      </div>
    `;

    timeGrid.appendChild(wrapper);
  }

  function formatTime(hour) {
    const period = hour >= 12 ? "pm" : "am";
    const displayHour = hour > 12 ? hour - 12 : hour;
    return `${displayHour}:00 ${period}`;
  }
</script>

<script>
  const paxDisplay = document.getElementById("paxDisplay");
  const message = document.getElementById("paxMessage");
  const totalPrice = document.getElementById("totalPrice");

  const basePrice = 150; // price for up to 10 pax
  const extraPricePerPax = 10;

  function updatePrice(pax) {
    let total = basePrice;

    if (pax > 10) {
      total += (pax - 10) * extraPricePerPax;
      message.textContent = "Tambahan RM10 untuk setiap pax tambahan";
      message.classList.add("text-red-600");
    } else {
      message.textContent = "";
      message.classList.remove("text-red-600");
    }

    totalPrice.textContent = `RM ${total}`;
  }

  document.getElementById("increase").addEventListener("click", () => {
    let value = parseInt(paxDisplay.textContent);

    if (value < 20) {
      value++;
      paxDisplay.textContent = value;
      updatePrice(value);
    }
  });

  document.getElementById("decrease").addEventListener("click", () => {
    let value = parseInt(paxDisplay.textContent);

    if (value > 1) {
      value--;
      paxDisplay.textContent = value;
      updatePrice(value);
    }
  });

  updatePrice(1);
</script>
<?php layout('footer'); ?>

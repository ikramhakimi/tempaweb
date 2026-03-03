<div id="formGridHour" class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-1 mt-4"></div>

<script>
  const timeGrid = document.getElementById("formGridHour");

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
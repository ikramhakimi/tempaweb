<div id="formGridDate" class="grid grid-cols-7 gap-2 mt-4"></div>

<script>
  const dateGrid = document.getElementById("formGridDate");
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
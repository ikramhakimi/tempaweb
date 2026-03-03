<div class="bg-white inline-flex items-center border border-zinc-300 rounded-md mt-4">
    <button type="button" id="decrease" class="px-4 py-2 rounded-md text-xl bg-zinc-100 hover:bg-zinc-200 m-1">−</button>

    <div id="paxDisplay" class="w-20 text-center font-semibold">1</div>

    <button type="button" id="increase" class="px-4 py-2 rounded-md text-xl bg-zinc-100 hover:bg-zinc-200 m-1">+</button>
</div>

<p id="paxMessage" class="mt-3 text-sm text-gray-600"></p>

<div class="mt-4 border-t pt-3">
    <div class="text-sm text-gray-600">Total Price</div>
    <div id="totalPrice" class="text-xl font-semibold">RM 150</div>
</div>

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
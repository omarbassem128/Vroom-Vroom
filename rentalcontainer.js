export function RentalC(rentalData) {
  const { carName, price, pickupDate, carImage, seats, drivingMode } =
    rentalData;
  return `
  <script
      src="https://kit.fontawesome.com/36ecb97839.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="contener">
      <div class="content">
        <img class="photo" src="carImages/${carImage}" alt="car pic loading" />
      </div>
      <div class="content">
        <h3 name="carName">${carName}</h3>

        <p class="text"><i class="fa-solid fa-chair"></i>${seats} seats</p>
        <p class="text">
        <i class="fa-solid fa-car"></i>${drivingMode}
        </p>
      </div>
      <div class="content">
        <p name="pickupDate" class="text"><i class="fa-solid fa-calendar-days"></i>${pickupDate}</p>
        <p class="text"><i class="fa-solid fa-money-bill"></i> ${price} EGP</p>
        </div>
            <form style="display:inline-block" action="car-selection.php" method = "post">
                <input type = "hidden" name = "pickupDate" value = "${pickupDate}" />
                <input type = "hidden" name = "carName" value = "${carName}" />
                <input type = "submit" id = "rent-${carName}-${pickupDate}" class="dont-display">
                <label for="rent-${carName}-${pickupDate}" style="background-color:green;" class="my-button">rent</label>
            </form>
    </div>
  `;
}

export function RentalC(rentalData) {
  const { carName, price, pickupDate, carImage, seats, drivingmode } =
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
        <h3>${carName}</h3>

        <p class="text"><i class="fa-solid fa-chair"></i>${seats} seats</p>
        <p class="text">
        <i class="fa-solid fa-car"></i>${drivingmode}
        </p>
      </div>
      <div class="content">
        <p class="text"><i class="fa-solid fa-calendar-days"></i>${pickupDate}</p>
        <p class="text"><i class="fa-solid fa-money-bill"></i> ${price} EGP</p>
        </div>
            <form style="display:inline-block" action="delete-purchase.php" method = "post" onsubmit="return confirm('Are you sure ?')">
                <input type = "hidden" name = "pickupDate" value = "${pickupDate}" />
                <input type = "hidden" name = "carName" value = "${carName}" />
                <input type = "submit" id = "delete" name = "delete-button" class="dont-display">
                <label for="delete" class="my-button">Delete<i class="fa-solid fa-trash" id="trash-icon"></i></label>
            </form>
    </div>
  `;
}

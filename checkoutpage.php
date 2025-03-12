<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkoutstyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Confirm your payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>owner</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card-Number</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="third-row">
                <h3>Card-Number</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months">
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                            <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="cards">
                        <img src="assets/MasterCard_Logo.svg.webp" alt="">
                        <img src="assets/Visa-Logo-2006.png" alt="">
                        <img src="assets/PayPal-Logo-2014.png" alt="">
                    </div>
                </div>
            </div>
            <a href="success.html">Confirm</a>
            <a href="carlist.php">Cancel</a>
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> "Pay page" </title>
    <link rel="stylesheet" href="style.css">



</head>
<body>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"


<form action="charge" method="post" id="payment-form">
    <div class="form-row">
        <label for="card-element">
            Credit or debit card
        </label>
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
</form>

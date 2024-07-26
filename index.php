<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define the character encoding for the HTML document -->
    <meta charset="UTF-8">
    <!-- Set the viewport to ensure the page is responsive on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <!-- Link to Bootstrap CSS for styling the page -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Add some spacing at the top of the page -->
    <br>
    <br>
    <br>
    <br>
    <section class="content">
        <div class="container text-justify">
            <div class="row align-items-center justify-content-center">
                <!-- Center the content within a 6-column wide section -->
                <div class="col-sm-12 col-md-6">
                    <!-- Create a card element with rounded corners and shadow effect -->
                    <div class="card rounded-lg shadow">
                        <div class="card-header">
                            <!-- Display the heading at the top of the card -->
                            <h1 class="text-center mt-4">Payment Details</h1>
                        </div>
                        <div class="card-body">
                            <!-- List group to display payment details -->
                            <ul class="list-group mb-3">
                                <!-- List item for event name -->
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Event Name</h6>
                                    </div>
                                    <!-- Placeholder text for event name -->
                                    <span class="text-muted">Sample Event Name</span>
                                </li>
                                <!-- List item for venue name -->
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Venue</h6>
                                    </div>
                                    <!-- Placeholder text for venue name -->
                                    <span class="text-muted">Sample Venue Name</span>
                                </li>
                                <!-- List item for event duration -->
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Event Duration</h6>
                                    </div>
                                    <!-- Placeholder text for event duration -->
                                    <span class="text-muted">3 hours</span>
                                </li>
                                <!-- List item for venue rate per hour -->
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Venue rate per hour</h6>
                                    </div>
                                    <!-- Placeholder text for venue rate -->
                                    <span class="text-muted">₱500.00</span>
                                </li>
                                <!-- List item for total payment -->
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Total Payment</strong></span>
                                    <!-- Placeholder text for total payment -->
                                    <strong>₱1500.00</strong>
                                </li>
                            </ul>
                            <!-- Centered form for checkout button -->
                            <div class="text-center mt-2 mb-2">
                                <form action="api/maya.php" method="POST">
                                    <!-- Hidden input to pass total payment to the server -->
                                    <input type="hidden" value="1500.00" name="total_payment">
                                    <!-- Hidden input to pass payment ID to the server -->
                                    <input type="hidden" value="12345" name="payment_id">
                                    <!-- Button to submit the form and proceed to checkout -->
                                    <button class="btn btn-block btn-primary" type="submit">Checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include jQuery, Popper.js, and Bootstrap JS for interactivity and animations -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Cancelled</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="card rounded-lg shadow">
                    <div class="card-header bg-warning text-white">
                        <h1 class="mt-4">Payment Cancelled</h1>
                    </div>
                    <div class="card-body">
                        <?php
                            // Get the booking_id from the query parameter
                            if (isset($_GET['booking_id'])) {
                                $booking_id = htmlspecialchars($_GET['booking_id']);
                                echo "<p class='lead'>Booking No: $booking_id</p>";
                            } else {
                                echo "<p class='text-danger'>Booking ID not provided.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

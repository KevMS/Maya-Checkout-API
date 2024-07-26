<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <section class="content">
        <div class="container text-justify">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <div class="card rounded-lg shadow">
                        <div class="card-header">
                            <h1 class="text-center mt-4">Payment Details</h1>
                        </div>
                        <div class="card-body">
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Event Name</h6>
                                    </div>
                                    <span class="text-muted">Sample Event Name</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Venue</h6>
                                    </div>
                                    <span class="text-muted">Sample Venue Name</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Event Duration</h6>
                                    </div>
                                    <span class="text-muted">3 hours</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-1">Venue rate per hour</h6>
                                    </div>
                                    <span class="text-muted">₱500.00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Total Payment</strong></span>
                                    <strong>₱1500.00</strong>
                                </li>
                            </ul>
                            <div class="text-center mt-2 mb-2">
                                <form action="api/maya.php" method="POST">
                                    <input type="hidden" value="1500.00" name="total_payment">
                                    <input type="hidden" value="12345" name="payment_id">
                                    <button class="btn btn-block btn-primary" type="submit">Checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

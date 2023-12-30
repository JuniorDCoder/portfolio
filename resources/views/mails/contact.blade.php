<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Mail</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3> New Contact Form</h3>
                    </div>
                    <div class="card-body">
                        <p>Hurray, New Contact Form Filled!</p>
                        <p>You have received a new contact message from your Portfolio Website</p>
                        <hr>
                        <h4>Message Details:</h4>
                        <ul>
                            <li><strong>Name:</strong> {{ $data['name'] }}</li>
                            <li><strong>Email:</strong> {{ $data['email'] }}</li>
                            <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
                            <li><strong>Message:</strong> {{ $data['message'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

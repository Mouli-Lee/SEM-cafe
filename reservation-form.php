<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to PHPMailer autoload.php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $person = $_POST['person'];


  // PHPMailer initialization
  $mail = new PHPMailer(true);

  try {

    //this is local configuration file//
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'moulip2811@gmail.com';
    $mail->Password = 'ysau vqft vjig inow';
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';
    // $mail->SMTPOptions = array(
    //   'ssl' => array(
    //     'verify_peer' => false,
    //     'verify_peer_name' => false,
    //     'allow_self_signed' => true
    //   )
    // );


    // Sender and recipient settings
    $mail->setFrom($email, 'Admin');
    $mail->addAddress('silvansam570@gmail.com'); // Recipient's email address
  

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Table Booking Details';
    $mail->Body = "<p>Hi<br><b>Full Name:</b> $name</p><p><b>Email:</b> $email</p><p><b>Date:</b><br>$date</p><p><b>Time:</b><br>$time</p><p><b>No.of.Persons:</b><br>$person</p>";

    // Send email
    $mail->send();

    // echo 'Message has been sent';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "semcafe";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO bookings (name, email, date, time, person)
    VALUES ('$name', '$email', '$date', '$time', '$person')";

    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Mail sent succesfully")</script>';

    } else {
      echo '<script>alert("Something went wrong.Please try again")</script>';
    }

    $conn->close(); // Close the database connection
  } catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo '<script>alert("Something went wrong.Please try again")</script>';
  }
}
?>
<body>
    <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
        <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
            <form class="mb-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <input type="text" name="name" class="form-control bg-transparent border-primary p-4" placeholder="Name"
                    required="required" style="color:#33201c" />
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                    required="required" style="color:#33201c" />
            </div>
            <div class="form-group">
                <div class="date" id="date" data-target-input="nearest">
                    <input type="date" name="date" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="form-group">
                <div class="time" id="time" data-target-input="nearest">
                    <input type="time" name="time" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="form-group">
            <input type="number" name="person" class="form-control bg-transparent border-primary p-4" placeholder="No. of. Person"
                    required="required" style="color:#33201c" />
            </div>
            
            <div>
                <button class="btn btn-primary btn-block font-weight-bold py-3" name="submit" type="submit">Book Now</button>
            </div>
        </form>
    </div>
</body>
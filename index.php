<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* css */
        .book_section {
            padding: 60px 0;
        }
        .book_section h4 {
            position: relative;
            padding-bottom: 5px;
            margin-bottom: 35px;
        }
        .book_section h4 span {
            color: #00c6a9;
        }
        .book_section form, .confirmation {
            padding: 35px 45px;
            box-shadow: 0 0 15px 10px rgba(0, 0, 0, 0.07);
            background-color: #fff;
        }
        .book_section form label, .confirmation label {
            color: #000000;
        }
        .book_section form .form-control {
            width: 100%;
            background-color: transparent;
            border: 1px solid #00c6a9;
            height: 45px;
            border-radius: 5px;
            padding: 0 15px;
        }
        .book_section form button.btn {
            background-color: #252525;
            color: #ffffff;
            padding: 10px 45px;
            border-radius: 5px;
            margin-top: 10px;
            text-transform: uppercase;
        }

        /* Responsive CSS */
        @media (max-width: 992px) {
            .book_section form, .confirmation {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .book_section h4 {
                font-size: 1.5rem;
            }
            .book_section form, .confirmation {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // მონაცემების მიღება
                    $patientName = htmlspecialchars($_POST['patientName']);
                    $doctorName = htmlspecialchars($_POST['doctorName']);
                    $departmentName = htmlspecialchars($_POST['departmentName']);
                    $phone = htmlspecialchars($_POST['phone']);
                    $symptoms = htmlspecialchars($_POST['symptoms']);
                    $date = htmlspecialchars($_POST['date']);

                    // ინფორმაციის ეკრანზე გამოტანა
                    echo "<div class='confirmation'>";
                    echo "<h1>Appointment Confirmation</h1>";
                    echo "<p>Thank you, <strong>$patientName</strong>!</p>";
                    echo "<p>Your appointment has been confirmed.</p>";
                    echo "<ul>
                            <li><strong>Doctor's Name:</strong> $doctorName</li>
                            <li><strong>Department:</strong> $departmentName</li>
                            <li><strong>Phone Number:</strong> $phone</li>
                            <li><strong>Symptoms:</strong> $symptoms</li>
                            <li><strong>Date:</strong> $date</li>
                          </ul>";
                    echo "</div>";
                } else {
                ?>
                    <form method="POST" action="">
                        <h4>BOOK <span>APPOINTMENT</span></h4>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="inputPatientName">Patient Name</label>
                                <input type="text" class="form-control" id="inputPatientName" name="patientName" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDoctorName">Doctor's Name</label>
                                <select class="form-control" id="inputDoctorName" name="doctorName" required>
                                    <option value="Doctor Jenny">Doctor Jenny</option>
                                    <option value="Doctor Marco">Doctor Marco</option>
                                    <option value="Doctor Henry">Doctor Henry</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDepartmentName">Department's Name</label>
                                <select class="form-control" id="inputDepartmentName" name="departmentName" required>
                                    <option value="General">General</option>
                                    <option value="Pediatrics">Pediatrics</option>
                                    <option value="Cardiology">Cardiology</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="inputPhone">Phone Number</label>
                                <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputSymptoms">Symptoms</label>
                                <input type="text" class="form-control" id="inputSymptoms" name="symptoms" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDate">Choose Date</label>
                                <input type="date" class="form-control" id="inputDate" name="date" required>
                            </div>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="btn">Submit Now</button>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMoubadara</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: hsl(0, 0%, 95%);
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_POST["send"])) {
        $LastName = $_POST["LastName"];
        $FirstName = $_POST["FirstName"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $Date = $_POST["Date"];
        $Sex = $_POST["Sex"];
        $Adresse = $_POST["Adresse"];
        $City = $_POST["City"];
        $toEmail = "elmahdiratildev@gmail.com";

        $mailHeaders = " الاسم : " . $LastName .
            "/r/n النسب : " . $FirstName .
            "/r/n  البريد الالكتروني : " . $Email .
            "/r/n  رقم الهاتف : " . $Phone .
            "/r/n  تاريخ الازدياد : " . $Date .
            "/r/n  الجنس : " . $Sex .
            "/r/n  العنوان : " . $Adresse .
            "/r/n  المدينة : " . $City . "/r/n";

        if (mail($toEmail, $LastName, $mailHeaders)) {
            $message = " Your Information is Received Successfully. ";
        }
    }
    ?>


    <div class="container mt-5">
        <div class="card">
            <form method="POST">
                <!-- Card header -->
                <div class="card-header">
                    <h4 class="fw-bold">استمارة الترشح</h4>
                </div>

                <!-- Card body -->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInput1" class="form-label">الاسم</label>
                        <input type="text" class="form-control" name="LastName" id="exampleInput1" required="required" autocomplete="off" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput2" class="form-label">النسب</label>
                        <input type="text" class="form-control" name="FirstName" id="exampleInput2" required="required" autocomplete="off" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput3" class="form-label">البريد الالكتروني</label>
                        <input type="email" class="form-control" name="Email" id="exampleInput3" required="required" autocomplete="off" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput4" class="form-label">رقم الهاتف</label>
                        <input type="tel" class="form-control" name="Phone" id="exampleInput4" required="required" autocomplete="off" />
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInput5" class="form-label">تاريخ الازدياد</label>
                                <input type="date" max="3000-01-01" class="form-control" name="Date" id="exampleInput5" required="required" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="exampleInput6" class="form-label">الجنس</label>
                            <select id="exampleInput6" name="Sex" class="form-control mb-3" aria-label="Default select example" required="required" autocomplete="off">
                                <option selected value="ذكر">ذكر</option>
                                <option value="أنثى">أنثى</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInput7" class="form-label">العنوان</label>
                        <input type="text" class="form-control" name="Adresse" id="exampleInput7" required="required" autocomplete="off" />
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="mb-3">
                                <label for="exampleInput8" class="form-label">المدينة</label>
                                <input type="text" class="form-control" name="City" id="exampleInput8" required="required" autocomplete="off" />
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Card footer -->
                <div class="card-footer">
                    <button type="submit" name="send" class="btn btn-primary">تسجيل</button>
                    <?php if (!empty($message)) {    ?>
                        <strong><?php echo $message ?></strong>
                    <?php } ?>
                </div>

            </form>
        </div>
    </div>

                        
    <!-- javascripts  -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://unpkg.com/jquery@3.6.0/dist/jquery.js"></script>
    
</body>

</html>
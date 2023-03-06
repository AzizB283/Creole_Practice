<?php
    require('spreadsheet/php-excel-reader/excel_reader2.php');
    require('spreadsheet/SpreadsheetReader.php');
    require('../Database/db.php');

    if(isset($_POST['Submit'])){

        $allowedFileType = [
            'application/vnd.ms-excel',
            'text/xls',
            'text/xlsx',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];

        if(in_array($_FILES["file"]["type"], $allowedFileType)){

            $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
            move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

            $Reader = new SpreadsheetReader($uploadFilePath);
            $spreadSheet = $Reader->Sheets();

            foreach ($spreadSheet as $key => $value) {
                $Reader->ChangeSheet($key);

                foreach ($Reader as $row) {
                    $name = "";
                    if (isset($row[0])) {
                        $name = mysqli_real_escape_string($conn, $row[0]);
                    }
                    $email = "";
                    if (isset($row[1])) {
                        $email = mysqli_real_escape_string($conn, $row[1]);
                    }
                    $number = "";
                    if (isset($row[2])) {
                        $number = mysqli_real_escape_string($conn, $row[2]);
                    }
                    $gender = "";
                    if (isset($row[3])) {
                        $gender = mysqli_real_escape_string($conn, $row[3]);
                    }
                    $address = "";
                    if (isset($row[4])) {
                        $address = mysqli_real_escape_string($conn, $row[4]);
                    }
                    $image = "";
                    if (isset($row[5])) {
                        $image = mysqli_real_escape_string($conn, $row[5]);
                    }

                    if (!empty($name) && !empty($email) && !empty($number) && !empty($gender) && !empty($address) && !empty($image)) {
                        $query = "INSERT INTO user_details (name, email, number, gender, address, image) VALUES ('$name', '$email', '$number', '$gender', '$address', '$image')";
                        $res = mysqli_query($conn, $query);
                        if ($res) {
                            $type = "success";
                            $message = "Excel Data Imported into the Database";
                            echo $message;
                        } else {
                            $type = "error";
                            $message = "Problem in Importing Excel Data";
                            echo $message;
                        }
                    }
                }
            }
        } else {
            $type = "error";
            $message = "Invalid File Type. Upload Excel File.";
            echo $message;
            header("Location: importdata.php");
        }
    }
?>

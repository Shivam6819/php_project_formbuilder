<?php
session_start();
$_SESSION = [];
$errors = [];

if(isset($_POST['selected_fields'])){
    foreach($_POST['selected_fields'] as $field){
        switch($field){
            case "text":
                if(empty($_POST['name']) || !preg_match("/^[a-zA-Z ]*$/", $_POST['name'])){
                    $errors[] = "Invalid Name (only letters and spaces allowed)";
                } else {
                    $_SESSION['name'] = $_POST['name'];
                }
                break;

            case "email":
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $errors[] = "Invalid Email Address";
                } else {
                    $_SESSION['email'] = $_POST['email'];
                }
                break;

            case "number":
                if(!preg_match("/^[0-9]{10}$/", $_POST['number'])){
                    $errors[] = "Number must be 10 digits";
                } else {
                    $_SESSION['number'] = $_POST['number'];
                }
                break;

            case "password":
                if(strlen($_POST['password']) < 6){
                    $errors[] = "Password must be at least 6 characters";
                } else {
                    $_SESSION['password'] = $_POST['password'];
                }
                break;

            case "comment":
                if(empty($_POST['comment'])){
                $errors[] = "Comment cannot be empty";
                } else {
                    $_SESSION['comment'] = htmlspecialchars($_POST['comment']);
                }
                break;
    

            case "gender":
                if(empty($_POST['gender'])){
                    $errors[] = "Please select an option from gender";
                } else {
                    $_SESSION['gender'] = $_POST['gender'];
                }
                break;

            case "checkbox":
                if(isset($_POST['agree'])){
                    $_SESSION['agree'] = "Yes";
                } else {
                    $errors[] = "You must agree to continue";
                }
                break;
        }
    }
}

// Show errors or redirect
if(count($errors) > 0){
?>
<!DOCTYPE html>
<html>
<head>
    <title>Validation Errors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 400px;
        }

        h3 {
            color: #d9534f;
            margin-bottom: 15px;
        }

        p {
            color: #d9534f;
            margin: 5px 0;
            font-size: 16px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #0275d8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        a:hover {
            background: #025aa5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Validation Errors:</h3>
        <?php
        foreach($errors as $err){
            echo "<p>⚠️ $err</p>";
        }
        ?>
        <a href="javascript:history.back()">🔙 Go Back</a>
    </div>
</body>
</html>
<?php
} else {
    header("Location: success.php");
    exit();
}
?>

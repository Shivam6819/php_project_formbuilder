<?php
if(isset($_POST['fields'])){
    $fields = $_POST['fields'];
} else {
    echo "No fields selected.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
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

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label, select, input[type="text"], input[type="email"], input[type="number"], input[type="password"] {
            margin: 8px 0;
            font-size: 16px;
            width: 100%;
        }

        select, input[type="text"], input[type="email"], input[type="number"], input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
            transform: scale(1.2);
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Fill the Form</h2>
        <form method="post" action="validate_form.php">
            <?php
            foreach($fields as $field){
                // hidden input to remember selected fields
                echo "<input type='hidden' name='selected_fields[]' value='$field'>";

                switch($field){
                    case "text":
                        echo "<label>Name:</label><input type='text' name='name'>";
                        break;
                    case "email":
                        echo "<label>Email:</label><input type='email' name='email'>";
                        break;
                    case "number":
                        echo "<label>Number:</label><input type='number' name='number'>";
                        break;
                    case "password":
                        echo "<label>Password:</label><input type='password' name='password'>";
                        break;
                    case "comment":
                        echo "Comment:<br><textarea name='comment' rows='4' cols='40'></textarea><br>";
                        break;
    
                    case "gender":
                        echo "<label>Gender:</label>
                        <select name='gender'>
                            <option value=''>Select</option>
                            <option value='male'>Male</option>
                            <option value='female'>Female</option>
                        </select>";
                        break;
                    case "checkbox":
                        echo "<label><input type='checkbox' name='agree'> I Agree</label>";
                        break;
                }
            }
            ?>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

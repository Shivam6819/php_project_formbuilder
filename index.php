<!DOCTYPE html>
<html>
<head>
    <title>Create Dynamic Form</title>
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
            width: 350px;
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

        label {
            font-size: 16px;
            margin: 8px 0;
            display: flex;
            align-items: center;
        }

        input[type="checkbox"] {
            margin-right: 10px;
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
        <h2>Select Fields for Your Form</h2>
        <form method="post" action="generate_form.php">
            <label><input type="checkbox" name="fields[]" value="text"> Text Field</label>
            <label><input type="checkbox" name="fields[]" value="email"> Email Field</label>
            <label><input type="checkbox" name="fields[]" value="number"> Number Field</label>
            <label><input type="checkbox" name="fields[]" value="password"> Password Field</label>
            <label><input type="checkbox" name="fields[]" value="comment"> Comment Box</label>
            <label><input type="checkbox" name="fields[]" value="gender"> Gender</label>
            <label><input type="checkbox" name="fields[]" value="checkbox"> Agree check box</label>
            
            <input type="submit" value="Generate Form">
        </form>
    </div>
</body>
</html>

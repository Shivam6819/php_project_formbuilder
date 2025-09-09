<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
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
            width: 500px;
        }

        .success {
            color: #28a745;
            font-size: 22px;
            margin-bottom: 15px;
        }

        h3 {
            color: #333;
            margin-bottom: 15px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f8f9fa;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="success">✅ Form Filled Successfully!</h2>
        <h3>Your Details:</h3>
        <table>
            <?php
            foreach($_SESSION as $key => $value){
                echo "<tr><th>".ucfirst($key)."</th><td>".$value."</td></tr>";
            }
            ?>
        </table>
        <a href="index.php">➕ Create Another Form</a>
    </div>
</body>
</html>

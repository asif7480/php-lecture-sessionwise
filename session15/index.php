<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add data to database</h2>
    Name: <br>
    <input type="text" name="" id="name" >
    <br>

    Email: <br>
    <input type="text" name="" id="email">
    <br>

    number: <br>
    <input type="text" name="" id="number">
    <br>

    Address: <br>
    <input type="text" name="" id="address" >
    <br>


    <input type="submit" name="" id="register" >
    <br>
    <!-- <p id="output"></p> -->
    <hr>

    <button id="show-data">click here to see all data</button>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Password</th>
        </thead>
        <tbody id="output">
            
        </tbody>
    </table>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="script.js"></script>
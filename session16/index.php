<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Username: <br>
    <input type="text" name="" id="username">
    <br>

    Fullname: <br>
    <input type="text" name="" id="fullname">
    <br>

    password: <br>
    <input type="text" name="" id="password">
    <br>

    <input type="button" value="click to insert data" id="insert">

    <div id="update-section">

    </div>
    <hr>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody id="output">

        </tbody>
    </table>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    $(document).ready(function(){
        // starting code for insert data in database
        $('#insert').on('click',function(){
            let username = $('#username').val();
            let fullname = $('#fullname').val();
            let password = $('#password').val();

            $.ajax({
                url: 'insert-data.php',
                method: 'post',
                data: {
                    username: username,
                    fullname: fullname,
                    password: password
                },
                success: function(){
                    $('#username').val("");
                    $('#fullname').val("");
                    $('#password').val("");
                    loadData();
                }
            })
        })
        // ending of code for insert data in database

        // starting code for loading database data from the database
        function loadData(){
            $.ajax({
                url: 'fetch-data.php',
                method: 'post',
                success: function(output){
                    $('#output').html(output)
                }
            })
        }

        loadData();
        // ending code for loading database data from the database
    
        // starting code for deleting data from the database
        $(document).on('click', '#deleteBtn', function(){
            let id = $(this).attr('row-id');
            alert(id);

            $.ajax({
                url: 'delete-data.php',
                method: 'post',
                data: { id: id },
                success: function(){
                    loadData();
                }
            })
        })

        // ending code for deleting data from the database
        // starting code for loading data for update from the database
        $(document).on('click', '#updateBtn', function(){
            let id = $(this).attr('row-id');
            // alert(id);

            $.ajax({
                url: 'load-data-update.php',
                method: 'post',
                data:{ id:id },
                success: function(loadDataForUpadate){
                    $('#update-section').html(loadDataForUpadate)
                }
            })
        })
        // ending code for loading data for update from the database
    
        // starting code for updating data from the database
        $(document).on('click', '#updateData', function(){
            let updatedId = $('#updatedId').val();
            let updatedUsername = $('#updatedUsername').val();
            let updatedFullname = $('#updatedFullname').val();
            let updatedPassword = $('#updatedPassword').val();

            $.ajax({
                url: 'update-data.php',
                method: 'post',
                data: {
                    updatedId: updatedId,
                    updatedUsername: updatedUsername,
                    updatedFullname: updatedFullname,
                    updatedPassword: updatedPassword
                },
                success: function(){
                    loadData();
                }
            })
        })

        // ending code for updating data from the database

    })    
</script>
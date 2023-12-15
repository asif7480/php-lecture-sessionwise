$(document).ready(function(){
    $('#register').on('click', function(){
        let name = $('#name').val();
        let email = $('#email').val();
        let number = $('#number').val();
        let address = $('#address').val();

        $.ajax({
            url: 'insert-data.php',
            method: 'post',
            data: {
                name: name,
                email: email,
                number: number,
                address: address,
            },
            success: function(data){
                // $('#output').html(data);
                $('#name').val("");
                $('#email').val("");
                $('#number').val("");
                $('#address').val("");

            }
        })
    
    })
    
    $('#show-data').on('click', function(){
        $.ajax({
            url: 'show-data.php',
            method: 'post',
            success: function(output){
                $('#output').html(output);  
            }
        })
    })
})  
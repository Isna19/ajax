
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AJAX Greeting Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Greeting Form</h1>
        <form id="greetForm">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
        </form>
        <div id="response"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#greetForm').on('submit', function(e) {
                e.preventDefault(); // Prevent form from submitting the traditional way

                // Get the input value
                const name = $('#name').val();

                // Send the AJAX request
                $.ajax({
                    url: 'ajax_handler.php',
                    type: 'POST',
                    data: { name: name },
                    success: function(response) {
                        // Display the response from the server
                        $('#response').html(response);
                    },
                    error: function() {
                        $('#response').html('<p style="color: red;">An error occurred. Please try again.</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>

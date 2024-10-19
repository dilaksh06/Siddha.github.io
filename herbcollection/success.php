<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Success</title>
   <!-- Include necessary CSS and JavaScript files -->
</head>

<body>
   <div class="content">
      <h2>Success!</h2>
      <p>Images successfully uploaded.</p>
   </div>

   <script>
      // Reset the form after a slight delay (adjust delay time if needed)
      window.onload = function() {
         setTimeout(function() {
            document.querySelector('.my-form').reset(); // Replace '.my-form' with your form class or ID
         }, 1000); // 1000 milliseconds = 1 second (adjust as needed)
      };
   </script>
</body>

</html>

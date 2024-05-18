<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complain Code</title>
</head>
<body>

    <div class="container-fluid">
        <h5 class="text-center">Congratulations, your complaint has been registered. Use the number below to check the complaint status.</h5>
        <br>
        <p class="text-center h1 text-success">{{ $complain->complain_no }}</p>

        <h4>Complaint details:</h4>
        <p>{!! $complain->description !!}</p>
    </div>



</body>
</html>

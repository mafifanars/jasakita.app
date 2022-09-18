<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Feedback</title>
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <style>
            *{
                font-family: 'Poppins', sans-serif;
            }
        </style>
    
    </head>

    <body>
        
        <div class="container mt-5">
            <div class="row">
              <div class="col-5">
                <img class="text-center justify-content-center" src="{{ asset('img/logo1.png') }}" width="300px">
                <h4 class="mt-2 mb-4 text-center">{{ $details['subject'] }}</h4>
                <p>Nama: {{ $details['name'] }} <br>
                    Email: {{ $details['email'] }}
                </p>
                <div class="text-justify">
                    <p>Pesan/Masukan: <br> {{ $details['message'] }}</p>
                </div>
              </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    </body>
</html>
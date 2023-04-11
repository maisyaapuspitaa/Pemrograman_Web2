<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('../dashboard.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.navbar');
    @include('partials.sidebar');
    <div class="Box1">
        <div class="gambar"></div>
        <div class="caption">What is mean by art museums?<br>
            An art museum or art gallery is a building or space for the display of art, usually from the museum's own collection. It might be in public or private ownership and may be accessible to all or have restrictions in place.
            </div>
    </div>
    <div class="art">
        <div class="box satu">
            <div class="arts1"></div>
            <div class="capt1">Date : May 29, 2002<br>Comment : it is very pleasant and relaxing here. Arts is my favourite</div>
        </div>
        <div class="box dua">
            <div class="arts2"></div>
            <div class="capt2">Date : August 26, 1998<br>Comment : A beautiful memory with my beloved partner</div>
        </div>
        <div class="box tiga">
            <div class="arts3"></div>
            <div class="capt3">Date : February 14, 2019<br>Comment : Happy valentine's day with him</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

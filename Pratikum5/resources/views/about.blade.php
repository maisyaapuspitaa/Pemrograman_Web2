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
    <div class="Box1">
        <div class="gambar"></div>
        <div class="caption"><b>Museum Louvre</b><br>
            The Louvre, or the Louvre Museum is a national art museum in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the city's 1st arrondissement and home to some of the most canonical works of Western art, including the Mona Lisa and the Venus de Milo
            Admission is free to the Musée du Louvre and the Musée Eugène-Delacroix for the following visitors (valid proof required): all visitors under the age of 18 and 18-25 year-old residents of the European Economic Area (EU, Norway, Iceland, and Liechtenstein) holders of a valid 'Pass Education' card.
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

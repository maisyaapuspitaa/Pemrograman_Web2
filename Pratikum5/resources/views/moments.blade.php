<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('../dashboard.css')}}">
    <title>Document</title>
</head>
<body>
    @include('partials.navbar');
    @include('partials.sidebar');
    <h1>All The Moments</h1>
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
</body>
</html>
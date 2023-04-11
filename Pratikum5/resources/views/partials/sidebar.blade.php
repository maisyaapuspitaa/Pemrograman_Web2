<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('../sidebar.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li>
                <a href = "/dashboard">
                    <span class="icon"><ion-icon name="restaurant-outline">Museum</ion-icon></span>
                    <span class="title"></span>
                </a>
            </li>
            <li>
                <a href = "/dashboard">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href = "/about">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">About</span>
                </a>
            </li>
            <li>
                <a href = "/moments">
                    <span class="icon"><ion-icon name="images-outline"></ion-icon></span>
                    <span class="title">Moments</span>
                </a>
            </li>
            <li>
                <a href = "/tickets">
                    <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                    <span class="title">Tickets</span>
                </a>
            </li>
            <li>
                <a href = "mailto:2110131320006@gmail.com">
                    <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                    <span class="title">Contact</span>
                </a>
            </li>
            <li>
                <a href = "/login.logout">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
        <div class="toggle"></div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
    let navigation = document.querySelector('.navigation');
    let toggle = document.querySelector('.toggle');
    toggle.onclick = function(){
        navigation.classList.toggle('active')
    }
</script>
</body>
</html>
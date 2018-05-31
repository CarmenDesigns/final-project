<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Final</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: fixed;
                right: 10px;
                top: 38px;
            }

            .nav{
                position: fixed;
                justify-items: left;
                left: 90px;
                top: 20px;

            }

            .nav li {
                display: inline-flex;
                padding: 10px;
            }
            a{
                text-decoration: none;
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .logo{

            }

            .image{
                position: fixed;
                top: 100px;
            }

            .grid-container{
                display: inline-flex;
                margin: 20px;
                padding: 110px;
                width: unset;

            }

            .column{
                padding: 50px;
            }

            .middle-column{
                text-align: center;
            }

            .container{
                display: inline-flex;
            }

            .tab {
                float: left;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
                width: 30%;
                height: 300px;
            }

            /* Style the buttons that are used to open the tab content */
            .tab button {
                display: block;
                background-color: inherit;
                color: black;
                padding: 22px 16px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                transition: 0.3s;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current "tab button" class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                float: left;
                padding: 0px 12px;
                border: 1px solid #ccc;
                width: 70%;
                border-left: none;
                height: 300px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif


        <div class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Werkzoekend</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <input type="text" placeholder="Search..">
            </ul>
        </div>
                <div class="image">
                    <img src="{{ URL::to('/') }}/images/image1.jpg">
                </div>

            <div class="grid-container">

                    <div class="column">
                        <h2>Welcome to our Page</h2>
                             <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi architecto corporis ea et eum, eveniet fuga iste laboriosam magni molestias officia porro quam quibusdam ratione repudiandae sed unde voluptas?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum explicabo, fugit in incidunt labore officia omnis pariatur suscipit vel. Aspernatur et expedita ipsa molestiae nesciunt optio pariatur praesentium quia repudiandae.</p>
                     </div>

                    <div class="column">
                        <h2>Improve yourself</h2>
                             <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, consequuntur, voluptates! Ab alias, animi blanditiis deleniti, excepturi, illum ipsum maxime nam nesciunt nihil quo suscipit. Aut dignissimos fugit iste quia?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at beatae esse est illum, inventore ipsum laudantium non nostrum quas quisquam repudiandae similique soluta temporibus tenetur totam velit, vero. Cumque?</p>
                    </div>
            </div>
        </div>

        <div class="middle-column">
            <h1>Come to one of our workshops</h1>
        </div>

        <div class="container">
            
                News name:<br>
                <form method="post" action="/news/{{$news->id}}">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="name"><br>
                    <input type="submit" value="Add">
                </form>

            <div class="tab">
                <button class="tablinks" onclick="openNews(event, 'London')">London</button>
                <button class="tablinks" onclick="openNews(event, 'Paris')">Paris</button>

            </div>

            <div id="London" class="tabcontent">
                <h3>London</h3>
                <p>London is the capital city of England.</p>
            </div>

            <div id="Paris" class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p>
            </div>

        </div>

<script>
    function openNews(evt, newsName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(newsName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
    </body>
</html>

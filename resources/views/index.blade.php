<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="{{url('/css/index.css')}}" type="text/css" rel="stylesheet" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <title>Home</title>
</head>

<body>

    <nav>
        <div class="brand-title"><img src=".idea\Pictures\emoticon-square-smiling-face-with-closed-eyes.svg" alt="">
        </div>

        <ul class="nav-links">

            <li><button id="sign">Sign Up</button>
            <!-- <div id="myModal" class="modal">
            
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Select User Type:</h1>
                    <br>
                    <br>

                    
                    <div class="in-content">
            
                       <button id="recruitor">Recruitor</button> 
                       <button id="artist">Artist</button>
                    </div>
            
            
                </div>
            </div> -->
            </li>
            <div class="vl"></div>
            <li><button id="log">Login</button></li>
        </ul>
    </nav>

    <div class="mini-body">

        <div class="m-b">
            <p>The <span>Avenue</span> <br> of <span>Kenya's</span> raw <br><span>Talents</span></p>
            <img src=".idea\Pictures\Telescope.jpg" alt="">
        </div>
        <div class="m-b2">
            <p>Join us to explore our youth empowering platform <br>
                support talents, see them, be entertained <br>
                and watch as their stars shine.
            </p>
            <img src=".idea\Pictures\download.jpg" alt="">
        </div>
        <div class="m-b3">

            <button class="button" id="Recruitor">Be a recruitor</button>
            <button class="button" id="addTalent">Add your talent</button>

        </div>
        <div class="m-b4">
            <p>EXPLORE :</p>

            <button id="findEvents">Find Events/Gigs</button>
            <button id="findArtists"> Find Artists</button>

        </div>
        <div class="m-b5">
            <p>OUR TALENTS</p>
            <div class="Talents">
                <input type="button" name=" talent" id="talent" value="Musicians">
                <input type="button" name=" talent" id="talent" value="Photographers">
                <input type="button" name=" talent" id="talent" value="Painters">
                <input type="button" name=" talent" id="talent" value="Song-writing">
            </div>
            <br>
            <div class="Talents">
                <input type="button" name=" talent" id="talent" value="Designers">
                <input type="button" name=" talent" id="talent" value="Writers">
                <input type="button" name=" talent" id="talent" value="Acting">
                <input type="button" name=" talent" id="talent" value="Poets">
            </div>
            <br>
            <div class="Talents1">
                <input type="button" name=" talent" id="talent" value="Graffiti">
                <input type="button" name=" talent" id="talent" value="Singers">
                <input type="button" name=" talent" id="talent" value="Singers">
            </div>
        </div>




    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <img src="Images/Logo-1.png" alt="">
            <br><br>
            <p class="footer-company-about">
                <span>SE Project </span>
                We want you to be part of us
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></i></a>

            </div>
        </div>



        <div class="footer-right">

        </div>
        <div class="footer-center">
            <div>
                <p>EXPLORE</p>
            </div>
            <br>

            <div>


                <a id="loc" href="#findEvents">Find Events/Gigs</a>
            </div>
            <br><br>
            <div>

                <a id="loc" href="#findArtists">Find Artists </a>
            </div>



        </div>
        <div class="bottomfooter">
            <p class="footer-company-name">SE Project &copy;
                <script>document.write(new Date().getFullYear());</script>
            </p>
        </div>

    </footer>
<script src="{{url('/Js/index.js')}}"></script>
</body>

</html>
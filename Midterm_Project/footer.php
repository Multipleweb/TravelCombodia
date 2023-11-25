<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }
    .footer-text a{
        color: white;
    }
    .footer-container {
        margin-top: 20px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #0950bc;
        color: white;
    }

    .footer-main {
        padding: 20px;
    }

    .footer-join {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .icon-1 {
        margin-top: 10px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgb(9, 190, 190);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .footer-icon{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .footer-p p {
        font-size: 10px;
    }

    .footer-text {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-text p {
        text-decoration: underline;
    }

    .footer-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-form input {
        width: 250px;
        height: 25px;
        outline: none;
        border: none;
        padding: 0px 0px 0px 10px;
        font-family: serif;
        box-shadow: 0px 0px 1px 1px rgb(195, 193, 193);
    }

    .footer-form input:focus{
        transform: scale(1.1);
    }
    .footer-btn .btn {
        width: 100px;
        height: 30px;
        border: none;
        inset: 0;
        border-radius: 5px;
        background-color: #193863;

    }

    .footer-btn .btn a {
        color: white;
        text-decoration: none;
    }

    .footer-title p {
        color: rgb(250, 249, 253);
        font-size: 20px;
        font-weight: bold;
    }

    .text-title p {
        font-size: 15px;
        color: rgb(251, 251, 255);
    }
    .footer-copyright{
        padding: 10px;
    }
    .footer-copyright p{
        font-size: 15px;
        color: #066418;
    }
</style>

<body>
    <div class="footer-container">
        <div class="footer-main">
            <div class="footer-title">
                <p>Join Us</p>
            </div>
            <br>
            <div class="text-title">
                <p>Join us for New Update</p>
            </div>
            <div class="footer-join">
                <div class="footer-icon">
                    <div class="icon-1">
                        <a href="#!"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="footer-p">
                        <p>Facebook</p>
                    </div>
                </div>
                <div class="footer-icon">
                    <div class="icon-1">
                        <a href="#!"><i class="fa fa-youtube"></i></a>
                    </div>
                    <div class="footer-p">
                        <p>YouTube</p>
                    </div>
                </div>
                <div class="footer-icon">
                    <div class="icon-1">
                        <a href="#!"><i class="fa fa-telegram"></i></a>
                    </div>
                    <div class="footer-p">
                        <p>Telegram</p>
                    </div>
                </div>
                <div class="footer-icon">
                    <div class="icon-1">
                        <a href="#!"><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="footer-p">
                        <p>Instagram</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-main">
            <div class="footer-about">
                <div class="footer-title">
                    <p>About</p>
                </div>
                <br>
                <div class="footer-text">
                    <a href="#!">
                        <p>Help center</p>
                    </a>
                    <a href="#!">
                        <p>About Us</p>
                    </a>
                    <a href="#!">
                        <p>Terms of service</p>
                    </a>
                    <a href="#!">
                        <p>Privacy Policy</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-main">
            <div class="footer-contact">
                <div class="footer-title">
                    <p>Contact</p>
                </div>
                <br>
                <div class="footer-form">
                    <input type="email" placeholder="Email" required>
                    <input type="text" placeholder="message">
                    <div class="footer-btn">
                        <button class="btn"><a href="#!">Send now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <center>
            <div class="footer-copyright">
                <p>Copyright@2023</p>
            </div>
        </center>
    </div>
</body>

</html>
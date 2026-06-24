<!DOCTYPE html>
<html>

<head>
    <title>Periphery Simple</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Quantico', sans-serif;
            background: #ddd;
        }

        .navbar {
            background: black;
            color: white;
            padding: 12px;
        }

        .navbar a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar a:hover {
            color: lime;
        }

        .page {
            display: flex;
        }

        .sidebar {
            width: 180px;
            background: #111;
            color: #aaa;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            color: #ccc;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: lime;
        }

        .main {
            flex: 1;
            padding: 20px;
        }

        .album {
            background: white;
            margin-bottom: 20px;
            padding: 20px;
            overflow: auto;
        }

        .cover {
            width: 200px;
            height: 200px;
            float: left;
            margin-right: 20px;
        }

        .cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .btn {
            display: inline-block;
            padding: 6px 10px;
            background: black;
            color: white;
            text-decoration: none;
            margin-right: 5px;
            font-size: 12px;
        }

        .btn:hover {
            background: lime;
            color: black;
        }

        .section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th {
            border-bottom: 1px solid #aaa;
            padding: 8px;
        }

        .contact-wrapper {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .contact-info {
            flex: 1;
        }

        .form-box {
            flex: 1;
            background: #eee;
            padding: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            font-family: inherit;
        }

        button {
            margin-top: 10px;
            padding: 8px 12px;
            background: black;
            color: white;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        button:hover {
            background: lime;
            color: black;
        }

        .output {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="navbar">
    periphery |
    <a href="#music">music</a>
    <a href="#tour">tour</a>
    <a href="#contact">contact</a>
</div>

<div class="page">

    <div class="sidebar">
        <a href="#music">music</a>
        <a href="#tour">tour</a>
        <a href="#contact">contact</a>
        <br><br>
        progressive metal<br>
        washington d.c.<br>
        djent band
    </div>

    <div class="main">

        <div id="music"></div>

        <div class="album">
            <div class="cover">
                <img src="Periphery_3.png" alt="Periphery III">
            </div>
            <div>
                <h3>Periphery III</h3>
                <p>2016</p>
                <a class="btn" href="#">Listen</a>
                <a class="btn" href="#">Store</a>
            </div>
        </div>

        <div class="album">
            <div class="cover">
                <img src="Periphery_4.jpg" alt="Periphery IV">
            </div>
            <div>
                <h3>Periphery IV</h3>
                <p>2019</p>
                <a class="btn" href="#">Listen</a>
                <a class="btn" href="#">Store</a>
            </div>
        </div>

        <div class="album">
            <div class="cover">
                <img src="Periphery_6.jpg" alt="A Pale White Dot">
            </div>
            <div>
                <h3>A Pale White Dot</h3>
                <p>2026</p>
                <a class="btn" href="#">Listen</a>
                <a class="btn" href="#">Store</a>
            </div>
        </div>

        <div id="tour" class="section">
            <h2>Tour Dates</h2>

            <table>
                <tr>
                    <th>Date</th>
                    <th>City</th>
                    <th>Venue</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Jul 12</td>
                    <td>LA</td>
                    <td>Wiltern</td>
                    <td><a class="btn" href="#">Tickets</a></td>
                </tr>
                <tr>
                    <td>Jul 15</td>
                    <td>Denver</td>
                    <td>Summit</td>
                    <td><a class="btn" href="#">Tickets</a></td>
                </tr>
            </table>
        </div>

        <div id="contact" class="section">

            <h2>Contact</h2>

            <div class="contact-wrapper">

                <div class="contact-info">
                    <p>
                        Management: example@email.com <br>
                        Booking: example@email.com <br>
                        Press: example@email.com
                    </p>
                </div>

                <div class="form-box">

                    <form method="POST">
                        <label>Send us a message!</label>
                        <input type="text" name="message" placeholder="Type here...">
                        <button type="submit">Send</button>
                    </form>

                    <div class="output">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                echo "You sent: " . htmlspecialchars($_POST["message"]);
                            }
                        ?>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>
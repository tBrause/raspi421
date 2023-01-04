<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo Welt</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Courier New', Courier, monospace;
        }

        div.bg {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 700;
            font-size: 10vw;
            color: #f1f1f1;
        }

        ul {
            display: flex;
            flex-wrap: wrap;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #164861;
            list-style: none;
            padding: 20px;
            color: #f1f1f1;
        }

        li {
            margin-right: 2em;
        }

        a {
            color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="bg">
        <h1>Hallo Welt</h1>
        <ul>
            <li>Raspbian GNU/Linux 11</li>
            <li>Apache/2.4.53</li>
            <li>Port 443</li>
            <li>PHP/8.1.4</li>
            <li><a href="https://www.ssllabs.com/ssltest/analyze.html?d=guteswetter.ddns.net" target="_blank">Qualys SSL Report</a></li>
        </ul>
    </div>

</body>

</html>
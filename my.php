<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
        nav {
            background-color: brown;
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        #nav{
            display: flex;
            flex-direction: row;
            height: auto;
            width: 30%;
            justify-content: space-between;
            list-style-type: none;

                li{
                    display: flex;
                    align-items: center;
                    height: 100%;
                }
        }

        img{
            width: 80px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Udin</h1>

        <ul id="nav">
            <li>Home</li>
            <li>Profile</li>
            <li>Skill</li>
        </ul>
        <img src="assets\imgs\avatar-2.jpg" alt="">
    </nav>
</body>
</html>
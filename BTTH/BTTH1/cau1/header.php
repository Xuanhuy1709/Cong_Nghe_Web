<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}
body {
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}
header {
    background-color: #6a1b9a;
    color: #fff;
    padding: 1em 0;
    margin-bottom: 20px;
}
header .header {
    display: flex;
    align-items: center;
    position: relative;
}

.header-left {
    display: flex;
}

.header-title {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    font-size: 1.5rem;
    font-weight: bold;
    color: #fff;
}

main h1{
    text-align: center;
}
.container {
    display: flex;
    flex-direction: column; 
    gap: 20px; 
    padding: 10px;
}

.flower {
    width: 100%; 
    box-sizing: border-box;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.flower img {
    max-width: 100%; 
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
}

.flower h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    /* color: #6a1b9a; */
    text-align: left;
}

.flower p {
    font-size: 1rem;
    color: #555;
    text-align: justify;
}
footer {
    background-color: #6a1b9a;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}

footer p {
    font-size: 1rem;
}
table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            /* text-align: center; */
        }
        th {
            background-color: #6a1b9a;
            color: white;
        }
        a {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1rem;
        }
        a:hover {
            background-color: #f0f0f0;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="header-left">
            <h1><a href="admin.php" style="text-decoration: none; color: #fff;">Admin</a></h1>
            <h1><a href="guest.php" style="text-decoration: none; color: #fff;">Guest</a></h1>
        </div>
        <h1 class="header-title">Trang Web về hoa</h1>
    </div>
</header>

</body>
</html>  
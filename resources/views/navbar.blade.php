<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css-files/style.css">
</head>
<body>
    <nav>
        <div class="icon">Bible Web App</div>
        <div class="search_box">
            <form type="post" action={{ route('search') }}>
                <input type="search" name="query" placeholder="Search here">
                <button type="submit" class="fa-solid fa-magnifying-glass"></button>
            </form>
        </div>
        <ol>
            <li><a href="about">About the Developers</a></li>
            <li><a href="logout">Logout</a></li>
        </ol>
    </nav>    
</body>
</html>
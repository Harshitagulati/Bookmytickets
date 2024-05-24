<!DOCTYPE html>
<html>
<head>
    <title>Movie Site - Main Content</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f2f2f2;
        }
        .navbar {
            background-color: #333; /* Navbar color */
            overflow: hidden;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative; /* Added to help dropdown display properly */
            z-index: 2; /* Ensure navbar is above other content */
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
        .navbar input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
        }
        .navbar input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .navbar input[type="submit"]:hover {
            background-color: #45a049;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar .heading {
            color: white;
            font-size: 1.5rem;
        }
        .section-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Ensure equal spacing between sections */
            padding: 20px;
            height: 90vh; /* Increased height of the container */
        }
        .section {
            width: calc(30% - 30px); /* Adjusted width to include margins */
            margin: 0 15px 30px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative; /* Ensure relative positioning for overlay */
            transition: transform 0.2s; /* Smooth hover effect */
        }
        .section:hover {
            transform: scale(1.05); /* Slightly increase size on hover */
        }
        .section a {
            display: block;
            color: inherit;
            text-decoration: none;
        }
        .section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 10px;
        }
        .section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.6); /* Adjust opacity as needed */
            z-index: 1;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0; /* Initially hidden */
            transition: opacity 0.3s ease; /* Smooth transition */
        }
        .section:hover .overlay {
            opacity: 1; /* Show overlay on hover */
        }
        h2 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div>
        <a href="/">Home</a>
        <a href="bollywood.html">Bollywood</a>
        <a href="hollywood.html">Hollywood</a>
        <a href="south-indian.html">South Indian</a>
    </div>
    <div class="heading">
        BOOKMYTICKETS
    </div>
    <form action="search.php" method="get">
        <input type="text" placeholder="Search movie..." name="search">
        <input type="submit" value="Search">
    </form>
</div>

<div class="section-container">
    <div class="section" id="hollywood">
        <a href="hollywood.html">
            <img src="https://wallpapercave.com/wp/wp2162761.jpg" alt="Hollywood Image">
            <div class="overlay">
                <h2>click for all Hollywood movies</h2>
            </div>
        </a>
    </div>
    <div class="section" id="bollywood">
        <a href="bollywood.html">
            <img src="https://www.sacnilk.com/image/bunnyimagenews.php?newsid=1000020325" alt="Bollywood Image">
            <div class="overlay">
                <h2>click for all Bollywood movies</h2>
            </div>
        </a>
    </div>
    <div class="section" id="south-indian">
        <a href="south-indian.html">
            <img src="https://i.ytimg.com/vi/PLsvmxCwaGg/maxresdefault.jpg" alt="South Indian Image">
            <div class="overlay">
                <h2>click for all South Indian movies</h2>
            </div>
        </a>
    </div>
</div>

</body>
</html>

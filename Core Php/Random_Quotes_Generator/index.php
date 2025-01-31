<?php
// Include the quotes.php file to access the quotes arrays
include('quotes.php');

// Check which type of quote to display
$quoteCategory = isset($_GET['category']) ? $_GET['category'] : 'all';

// Get a random quote from the selected category
if ($quoteCategory == 'muslim') {
    $randomQuote = $muslimQuotes[array_rand($muslimQuotes)];
} else if ($quoteCategory == 'other') {
    $randomQuote = $otherQuotes[array_rand($otherQuotes)];
} else {
    // Default to a random quote from both categories
    $allQuotes = array_merge($muslimQuotes, $otherQuotes);
    $randomQuote = $allQuotes[array_rand($allQuotes)];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?nature,sky,quote') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4);
        }

        .quote-container {
            text-align: center;
            padding: 40px 50px;
            max-width: 600px;
            background-color: rgba(0, 0, 0, 0.8); /* Darker background for more contrast */
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); /* Larger shadow for more depth */
            transition: transform 0.3s ease-in-out;
        }

        .quote-container:hover {
            transform: translateY(-15px); /* Slight lift on hover */
        }

        h1 {
            font-size: 2.8em;
            font-weight: bold;
            color: #FFDD57; /* Soft golden yellow for contrast */
            margin-bottom: 25px;
            font-family: 'Lobster', cursive;
        }

        p {
            font-size: 1.5em;
            margin-top: 20px;
            color: #F1F1F1; /* Light gray text for good contrast on dark background */
            font-style: italic;
            line-height: 1.8;
        }

        .btn {
            display: inline-block;
            padding: 14px 35px;
            margin-top: 35px;
            background-color: #FFB6B9; /* Soft pastel pink color */
            color: #fff;
            text-decoration: none;
            font-size: 1.3em;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #FF8B94; /* Slightly darker pink on hover */
            transform: scale(1.05); /* Slight scale on hover */
        }

        .btn:active {
            transform: scale(1); /* Reset scale when clicked */
        }

        .category-buttons {
            margin-top: 40px;
        }

        .category-buttons a {
            display: inline-block;
            margin: 10px;
            padding: 12px 25px;
            background-color: #4ECDC4;
            color: #fff;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .category-buttons a:hover {
            background-color: #36A39A;
            transform: scale(1.05);
        }

        .category-buttons a:active {
            transform: scale(1);
        }
    </style>
</head>
<body>

<div class="quote-container">
    <h1>Random Quote</h1>
    <p><?php echo $randomQuote; ?></p>
    <div class="category-buttons">
        <a href="index.php?category=muslim" class="btn">Muslim Quotes</a>
        <a href="index.php?category=other" class="btn">Other Quotes</a>
    </div>
</div>

</body>
</html>

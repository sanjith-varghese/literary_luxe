<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horror Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url('/img/wal11.jpeg') no-repeat center center fixed; /* Update path if needed */
            background-size: cover;
            color: white;
        }

        .header {
            width: 100%;
            text-align: center;
            margin-top: 60px;
            padding: 20px 0;
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            color:black;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            margin-top: 20px;
        }

        .category-box {
            background-color: rgba(173, 187, 218, 0.8); /* Semi-transparent */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(20% - 40px); /* Adjusted width for five boxes in a row */
            margin: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius:20px;
        }

        .category-box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .category-box img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .category-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color:black;
        }

        .category-description {
            color:black;    
        }

        @media (max-width: 1200px) {
            .category-box {
                width: calc(25% - 40px);
            }
        }

        @media (max-width: 992px) {
            .category-box {
                width: calc(33.33% - 40px);
            }
        }

        @media (max-width: 768px) {
            .category-box {
                width: calc(50% - 40px);
            }
        }

        @media (max-width: 576px) {
            .category-box {
                width: calc(100% - 40px);
            }
        }

        .search-bar-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
            padding: 10px 0;
            background-color: rgba(61, 82, 160, 0.8); /* Semi-transparent */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            width: 60%;
            max-width: 600px;
            display: flex;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            font-size: 16px;
            border-radius: 8px 0 0 8px;
        }

        .search-bar input[type="text"]:focus {
            outline: none;
        }

        .search-bar button {
            padding: 10px;
            background-color: #3D52A0;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 0 8px 8px 0;
        }

        .search-bar button:hover {
            background-color: #2F4F4F;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach($hcat as $Book)
            <div class="category-box">
                <img src="/img/{{ $Book->inputFileUpload }}" alt="{{ $Book->bookname }}" style="width:150px;hight:250px;">
                <div class="category-title">{{ $Book->bookname }}</div>
                <div class="category-description">{{ $Book->description }}</div>
                <div class="category-description">Author: {{ $Book->authorname }}</div>
                <div class="category-description">Publisher: {{ $Book->publishername }}</div>
            </div>
        @endforeach
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searched Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
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
            background: url('/img/wal11.jpeg') no-repeat center center fixed;     /* Update path if needed */
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
        </style>
<body>
<div class="container">
       @forelse($bookname as $value)
            <div class="category-box">
                <img src="/img/{{ $value->inputFileUpload }}" alt="{{ $value->bookname }}" style="width:150px;hight:200px;">
                <div class="category-title">{{ $value->bookname }}</div>
                <div class="category-description">{{ $value->description }}</div>
                <div class="category-description">Author: {{ $value->authorname }}</div>
                <div class="category-description">Publisher: {{ $value->publishername }}</div>
                <a href="/text">Read</a>
            </div>
            
            @empty
        <div class="category-box">
            <div class="category-title1">No Books Found</div>
         </div>


            
        
    </div>
    @endforelse

    <div>
        <p>
    </div>









    </body>
    </html>

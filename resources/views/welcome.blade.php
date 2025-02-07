<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(to bottom right, #fddde6, #f8a5c2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: left;
            color: white;
            margin-right: 50px;
        }
        .container h1 {
            font-family: 'Fredoka One', cursive;
            font-size: 2em; /* Reduced font size */
            margin: 0;
        }
        .container h2 {
            font-family: 'Fredoka One', cursive;
            font-size: 2.5em;
            margin: 0;
        }
        .container p {
            font-size: 1em;
            margin-top: 10px;
        }
        .qr-generator {
            background: #fdf6e4;
            border-radius: 40px; /* Increased border radius */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 250px;
            text-align: center;
            margin-left: -20px; /* Adjust this value to move the form to the left */
        }
        .qr-generator h3 {
            font-family: 'Fredoka One', cursive;
            font-size: 1.5em;
            color: #000;
            margin-bottom: 15px;
        }
        .qr-generator input, .qr-generator select, .qr-generator button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 2px solid #f8a5c2;
            border-radius: 20px; /* Increased border radius for input */
            font-size: 1em;
        }
        .qr-generator input {
            width: 91%;
            padding: 10px;
            margin: 8px 0;
            border: 2px solid #f8a5c2;
            border-radius: 20px; /* Increased border radius for input */
            font-size: 1em;
        }
        .qr-generator button {
            background: #fddde6; /* Lightened pink background */
            color: #d16b8c; /* Dark pink text color */
            border: none;
            cursor: pointer;
        }
        .qr-generator button:hover {
            background: #f8a5c2;
        }
        @media (max-width: 768px) {
            body {
                flex-direction: column;
                justify-content: flex-start;
                padding-top: 20px;
            }
            .container {
                text-align: center;
                margin-right: 0;
                margin-bottom: 20px;
            }
            .container h1, .container h2 {
                font-size: 1.5em;
            }
            .container p {
                font-size: 0.9em;
            }
            .qr-generator {
                width: 90%;
                margin-left: 0;
                padding: 20px 10px; /* Added padding to reduce left and right margins */
            }
            .qr-generator input {
            width: 95%;
            padding: 10px;
            margin: 8px 0;
            border: 2px solid #f8a5c2;
            border-radius: 20px; /* Increased border radius for input */
            font-size: 1em;
        }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to</h1>
        <h2>QR Code Generator</h2>
        <p>Generate high-quality QR Codes instantly for your links and text.</p>
    </div>
    <div class="qr-generator">
        <h3>QR Generator</h3>
        <form id="qr-form" action="{{ route('generate-qr-code') }}" method="POST">
            @csrf
            <input type="text" id="qr-code" name="qr-code" placeholder="Drop your text or link here">
            <select id="qr-size" name="qr-size">
                <option selected disabled>Select Qr Code Size</option>
                <option value="100">Small</option>
                <option value="150">Medium</option>
                <option value="200">Large</option>
            </select>
            <button type="submit">Generate QR Code</button>
            {{-- Display QR Code --}}
            @if (Session::has('qr-code'))
            <div class="mt-4 text-center">
              {!! Session::get('qr-code') !!}
            </div>
            @endif
        </form>

    </div>
</body>
</html>

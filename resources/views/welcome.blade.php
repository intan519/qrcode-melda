<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-white flex justify-center items-center h-screen">

    <div class="max-w-sm w-full p-6 bg-white rounded-lg shadow-xl text-center">
        <h2 class="text-2xl font-bold mb-5 text-gray-800">QR Code Generator</h2>

        <div class="mt-4">
            @if(isset($qrCodeUrl))
                <div class="flex justify-center">
                    <img src="{{ $qrCodeUrl }}" alt="QR Code" class="rounded-lg border-2 border-gray-300 p-2">
                </div>
            @else
                <p class="text-gray-400">QR Code will appear here.</p>
            @endif
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.js"></script>
</body>
</html>

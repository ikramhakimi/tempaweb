<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas UI Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
        extend: {
            fontFamily: {
            sans: ['Outfit', 'ui-sans-serif', 'system-ui'],
            }
        }
        }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-zinc-50 text-zinc-500">
    <!-- Topbar -->
    <header class="h-16 bg-white border-b border-zinc-200 flex items-center px-6">
        <div class="flex flex-1 items-center gap-4">
            <button class="md:hidden text-zinc-600">☰</button>
            <div class="font-bold">TheCameraGuy</div>
        </div>
        <div class="text-sm text-zinc-600">Contact Us</div>
    </header>


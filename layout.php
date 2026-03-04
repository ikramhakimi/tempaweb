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

<?php require __DIR__ . '/views/layout/header.php'; ?>

<main class="max-w-5xl mx-auto py-10 px-4">
    <?= $content ?>
</main>

<?php require __DIR__ . '/views/layout/footer.php'; ?>

</body>
</html>
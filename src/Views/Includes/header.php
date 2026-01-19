<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign Up | PHP MVC App</title>
    <link rel="shortcut icon" href="../../../public/assets/images/logo.jpg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col">
    <header
        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark px-10 py-3">
        <div class="flex items-center gap-4 text-primary">
            <div class="size-6">
                <span class="material-symbols-outlined text-3xl">school</span>
            </div>
            <a href="main.php">
                <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">AdminCore</h2>
            </a>
        </div>
        <div class="flex gap-4 items-center">
            <button
                class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal">
                <?php if(!isset($_SESSION["id"])):?>
                    <a href="/login" class="truncate">Log In</a>
                <?php else: ?>
                    <a href="/logout" class="truncate">Log out</a>
                <?php endif;?>
            </button>
        </div>
    </header>
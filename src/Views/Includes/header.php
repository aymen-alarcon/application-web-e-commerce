<?php
    use App\config\DatabaseConnection;

    $db = new DatabaseConnection();
    $conn = $db->establishConnection();
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Product Detail Page - ElectroShop</title>
    <link rel="shortcut icon" href="../../../public/images/logo.jpg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#136986",
                        "background-light": "#ffffff",
                        "background-dark": "#1c1e22",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .filled-star {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-200">
    <header
        class="sticky top-0 z-50 w-full border-b border-slate-100 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
        <div class="max-w-[1280px] mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-10">
                <div class="flex items-center gap-2 text-primary">
                    <span class="material-symbols-outlined text-3xl">bolt</span>
                    <a href="/Home" class="text-xl font-black tracking-tight uppercase">ElectroShop</a>
                </div>
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Laptops</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Smartphones</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Audio</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Monitors</a>
                </nav>
            </div>
            <div class="flex items-center gap-4 flex-1 justify-end">
                <div class="relative max-w-xs w-full hidden lg:block">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                    <input
                        class="w-full h-9 pl-10 pr-4 rounded-lg bg-slate-100 dark:bg-slate-800 border-none text-sm focus:ring-2 focus:ring-primary/20 transition-all"
                        placeholder="Search components..." type="text" />
                </div>
                <a href="/Logout" class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
                    <span class="material-symbols-outlined">person</span>
                </a>
                <a href="/Cart" class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors relative">
                    <span class="material-symbols-outlined">shopping_cart</span>
                    <span
                        class="absolute top-1 right-1 bg-primary text-white text-[10px] font-bold w-4 h-4 flex items-center justify-center rounded-full">2</span>
                </a>
            </div>
        </div>
    </header>
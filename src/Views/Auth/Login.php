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
        <main class="flex flex-1 items-center justify-center p-6">
            <div
                class="w-full max-w-[480px] rounded-xl border border-[#dbe0e6] dark:border-[#2a343d] bg-white dark:bg-[#1a252f] p-8 shadow-sm">
                <div class="mb-8">
                    <h1 class="text-[#111418] dark:text-white tracking-light text-[32px] font-bold leading-tight text-center">
                        Welcome Back</h1>
                    <p class="text-[#617589] dark:text-gray-400 text-center text-base mt-2">Login to manage your
                        dashboard</p>
                </div>
                <form action="/loginProcess" class="space-y-6" method="POST">
                    <div class="flex flex-col gap-1">
                        <label class="flex flex-col">
                            <p class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Email
                                Address</p>
                            <input class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-[#3a444d] bg-white dark:bg-[#101922] h-12 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal transition-all"
                                name="email" placeholder="Enter your email" required="" type="email" />
                        </label>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="flex flex-col">
                            <div class="flex justify-between items-center pb-2">
                                <p class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal">
                                    Password
                                </p>
                            </div>
                            <input class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-[#3a444d] bg-white dark:bg-[#101922] h-12 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal transition-all"
                                name="password" placeholder="••••••••" required="" type="password" />
                        </label>
                    </div>
                    <button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal transition-colors" type="submit">
                        <span class="truncate">Sign In</span>
                    </button>
                </form>
                <div class="mt-8 border-t border-[#f0f2f4] dark:border-[#2a343d] pt-6 text-center">
                    <p class="text-[#617589] dark:text-gray-400 text-sm">
                        Don't have an account?
                        <a class="text-primary font-bold hover:underline ml-1" href="/signup">Create an account</a>
                    </p>
                </div>
            </div>
        </main>
<?php require "includes/footer.php"; ?>
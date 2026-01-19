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
    <main class="flex-1 flex items-center justify-center p-6">
        <div
            class="w-full max-w-[480px] bg-white dark:bg-[#1a242f] rounded-xl shadow-xl border border-gray-100 dark:border-gray-800 overflow-hidden">
            <div class="pt-8 pb-2">
                <h1
                    class="text-[#111418] dark:text-white tracking-tight text-[32px] font-bold leading-tight px-8 text-center">
                    Create Account</h1>
                <p class="text-gray-500 dark:text-gray-400 text-base font-normal leading-normal px-8 text-center pt-2">
                    Enter your details to register for the platform</p>
            </div>
            <form class="p-8 space-y-4" action="/registerProcess" method="POST">
                <div class="flex flex-col gap-2">
                    <label class="text-[#111418] dark:text-white text-base font-medium leading-normal">first Name</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">person</span>
                        <input
                            class="form-input flex w-full min-w-0 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark h-12 pl-12 pr-4 placeholder:text-gray-400 text-base font-normal transition-all"
                            placeholder="John Doe" name="first_name" required="" type="text" />
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-[#111418] dark:text-white text-base font-medium leading-normal">last Name</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">person</span>
                        <input
                            class="form-input flex w-full min-w-0 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark h-12 pl-12 pr-4 placeholder:text-gray-400 text-base font-normal transition-all"
                            placeholder="John Doe" name="last_name" required="" type="text" />
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-[#111418] dark:text-white text-base font-medium leading-normal">Email
                        Address</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">mail</span>
                        <input
                            class="form-input flex w-full min-w-0 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark h-12 pl-12 pr-4 placeholder:text-gray-400 text-base font-normal transition-all"
                            placeholder="name@example.com" required="" name="email" type="email" />
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-[#111418] dark:text-white text-base font-medium leading-normal">Password</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">lock</span>
                        <input
                            class="form-input flex w-full min-w-0 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark h-12 pl-12 pr-12 placeholder:text-gray-400 text-base font-normal transition-all"
                            placeholder="••••••••" required="" name="password" type="password" />
                        <button
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary transition-colors"
                            type="button">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-[#111418] dark:text-white text-base font-medium leading-normal">Confirm
                        Password</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">check_circle</span>
                        <input
                            class="form-input flex w-full min-w-0 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark h-12 pl-12 pr-4 placeholder:text-gray-400 text-base font-normal transition-all"
                            placeholder="••••••••" required="" type="password" />
                    </div>
                </div>
                <button
                    class="flex w-full items-center justify-center rounded-lg h-12 px-4 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal shadow-lg transition-all transform active:scale-[0.98]"
                    type="submit">
                    Sign Up
                </button>
                <div class="pt-6 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Already have an account?
                        <a class="text-primary font-bold hover:underline ml-1" href="/login">Log In</a>
                    </p>
                </div>
            </form>
        </div>
    </main>
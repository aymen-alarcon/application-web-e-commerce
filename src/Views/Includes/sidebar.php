<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Category Management - ElectroStore</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
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
                        "background-light": "#f9fafa",
                        "background-dark": "#17191c",
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .sidebar-active {
            background-color: #136986;
            color: white !important;
        }

        .sidebar-active .material-symbols-outlined {
            color: white !important;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="flex min-h-screen">
        <aside
            class="w-64 bg-white dark:bg-[#1e2124] border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-20">
            <div class="p-6">
                <div class="flex items-center gap-3">
                    <div class="size-10 rounded-lg bg-primary flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">bolt</span>
                    </div>
                    <div>
                        <h1 class="text-slate-900 dark:text-white text-base font-bold leading-none">ElectroStore</h1>
                        <p class="text-slate-500 dark:text-slate-400 text-xs font-medium mt-1">Admin Control</p>
                    </div>
                </div>
            </div>
            <nav class="flex-1 px-4 space-y-1">
                <a class="<?php if(str_contains($_SERVER["PHP_SELF"] ,"Dashboard")){echo "sidebar-active shadow-sm shadow-primary/20";} ?> flex items-center gap-3 px-3 py-2.5 text-slate-600 rounded-lg transition-colors group" href="/Admin/Dashboard">
                    <span class="material-symbols-outlined text-[22px]">dashboard</span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
                <a class="<?php if(str_contains($_SERVER["PHP_SELF"] ,"Products")){echo "sidebar-active shadow-sm shadow-primary/20";} ?> flex items-center gap-3 px-3 py-2.5 text-slate-600 rounded-lg transition-colors group"
                    href="/Admin/Products">
                    <span class="material-symbols-outlined text-[22px]">inventory_2</span>
                    <span class="text-sm font-medium">Products</span>
                </a>
                <a class="<?php if(str_contains($_SERVER["PHP_SELF"] ,"Categories")){echo "sidebar-active shadow-sm shadow-primary/20";} ?> flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors "
                    href="/Admin/Categories">
                    <span class="material-symbols-outlined text-[22px]">category</span>
                    <span class="text-sm font-medium">Categories</span>
                </a>
                <a class="<?php if(str_contains($_SERVER["PHP_SELF"] ,"Orders")){echo "sidebar-active shadow-sm shadow-primary/20";} ?> flex items-center gap-3 px-3 py-2.5 text-slate-600 rounded-lg transition-colors group"
                    href="/Admin/Orders">
                    <span class="material-symbols-outlined text-[22px]">shopping_cart</span>
                    <span class="text-sm font-medium">Orders</span>
                </a>
                <a class="<?php if(str_contains($_SERVER["PHP_SELF"] ,"Users")){echo "sidebar-active shadow-sm shadow-primary/20";} ?> flex items-center gap-3 px-3 py-2.5 text-slate-600 rounded-lg transition-colors group"
                    href="/Admin/Users">
                    <span class="material-symbols-outlined text-[22px]">group</span>
                    <span class="text-sm font-medium">Users</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-200 dark:border-slate-800">
                <div class="flex items-center gap-3 px-2 py-2">
                    <div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
                        <img class="w-full h-full object-cover" data-alt="Admin user avatar"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuACtPkNoPTjXzMOJzPP1MmMLqiiFKxMqB5IweMBRrpJcl23MtQ8SGsO4QipkbxXywZQK-oAz3jV5hByyESgB7ejhLTU1VWyPHNU6rLIIOzYZ5phOrF3n5-slDn4zLHYDCnseu2cLi_XWOMxd-ptyKY_geDeRbHUR83AkV-SnKB99LCo-q_IF13zif798Xze1lr8BRrtMRjRvLJt23Snve0KbWPodt8eCohTf3UezTF5CL_E31f4cR52x456WcOKP1ZLVRS-54xBhsM" />
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-900 dark:text-white truncate">Alex Rivera</p>
                        <p class="text-xs text-slate-500 truncate">Super Admin</p>
                    </div>
                    <a href="/Logout" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                    </a>
                </div>
            </div>
        </aside>
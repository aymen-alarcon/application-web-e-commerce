<?php require "src/Views/Includes/header.php"; ?>
    <main class="max-w-5xl mx-auto px-4 py-10">
        <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold tracking-tight mb-2">Your Orders</h1>
                <p class="text-slate-500 dark:text-slate-400">View and track all your electronic hardware purchases.</p>
            </div>
            <div class="flex gap-4">
                <div
                    class="bg-white dark:bg-slate-800/50 p-4 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm min-w-[120px]">
                    <span class="text-xs text-slate-400 uppercase font-semibold block mb-1">Total Orders</span>
                    <span class="text-xl font-bold text-primary">24</span>
                </div>
                <div
                    class="bg-white dark:bg-slate-800/50 p-4 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm min-w-[120px]">
                    <span class="text-xs text-slate-400 uppercase font-semibold block mb-1">Spent (YTD)</span>
                    <span class="text-xl font-bold">$4,892</span>
                </div>
            </div>
        </div>
        <div
            class="bg-white dark:bg-slate-800/50 rounded-lg border border-slate-200 dark:border-slate-800 p-4 mb-6 shadow-sm flex flex-col md:flex-row gap-4 items-center">
            <div class="relative w-full md:w-96">
                <span
                    class="material-icons absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                <input
                    class="w-full pl-10 pr-4 py-2 bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary focus:border-primary"
                    placeholder="Search by Order ID or Item..." type="text" />
            </div>
            <div class="flex gap-2 w-full md:w-auto">
                <select
                    class="bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm px-4 py-2 focus:ring-primary focus:border-primary grow md:grow-0">
                    <option>All Statuses</option>
                    <option>Delivered</option>
                    <option>Shipped</option>
                    <option>Pending</option>
                    <option>Cancelled</option>
                </select>
                <select
                    class="bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg text-sm px-4 py-2 focus:ring-primary focus:border-primary grow md:grow-0">
                    <option>Last 3 Months</option>
                    <option>Last 6 Months</option>
                    <option>2023</option>
                    <option>2022</option>
                </select>
            </div>
        </div>
        <div class="space-y-4">
            <div
                class="bg-white dark:bg-slate-800/40 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow group overflow-hidden">
                <div class="p-5 flex flex-col md:flex-row md:items-center gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-slate-50 dark:bg-slate-900 rounded-lg flex items-center justify-center border border-slate-100 dark:border-slate-700">
                        <span class="material-icons text-slate-400">memory</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex items-center gap-3 mb-1">
                            <span class="font-semibold text-slate-900 dark:text-white">#ORD-99821</span>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                Shipped
                            </span>
                        </div>
                        <div class="text-sm text-slate-500 dark:text-slate-400 flex flex-wrap gap-x-4 gap-y-1">
                            <span>Placed on Oct 14, 2023</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-[16px]">inventory_2</span> 3 items</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:flex-col md:items-end gap-2">
                        <span class="text-lg font-bold text-slate-900 dark:text-white">$1,249.00</span>
                        <a class="px-4 py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white rounded font-medium text-sm transition-all flex items-center gap-2"
                            href="#">
                            View Details <span class="material-icons text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-800/40 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow group overflow-hidden">
                <div class="p-5 flex flex-col md:flex-row md:items-center gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-slate-50 dark:bg-slate-900 rounded-lg flex items-center justify-center border border-slate-100 dark:border-slate-700">
                        <span class="material-icons text-slate-400">developer_board</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex items-center gap-3 mb-1">
                            <span class="font-semibold text-slate-900 dark:text-white">#ORD-98710</span>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                Delivered
                            </span>
                        </div>
                        <div class="text-sm text-slate-500 dark:text-slate-400 flex flex-wrap gap-x-4 gap-y-1">
                            <span>Placed on Sep 22, 2023</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-[16px]">inventory_2</span> 1 item</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:flex-col md:items-end gap-2">
                        <span class="text-lg font-bold text-slate-900 dark:text-white">$450.50</span>
                        <a class="px-4 py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white rounded font-medium text-sm transition-all flex items-center gap-2"
                            href="#">
                            View Details <span class="material-icons text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-800/40 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow group overflow-hidden">
                <div class="p-5 flex flex-col md:flex-row md:items-center gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-slate-50 dark:bg-slate-900 rounded-lg flex items-center justify-center border border-slate-100 dark:border-slate-700">
                        <span class="material-icons text-slate-400">router</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex items-center gap-3 mb-1">
                            <span class="font-semibold text-slate-900 dark:text-white">#ORD-97552</span>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-300">
                                Pending
                            </span>
                        </div>
                        <div class="text-sm text-slate-500 dark:text-slate-400 flex flex-wrap gap-x-4 gap-y-1">
                            <span>Placed on Oct 28, 2023</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-[16px]">inventory_2</span> 5 items</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:flex-col md:items-end gap-2">
                        <span class="text-lg font-bold text-slate-900 dark:text-white">$3,120.00</span>
                        <a class="px-4 py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white rounded font-medium text-sm transition-all flex items-center gap-2"
                            href="#">
                            View Details <span class="material-icons text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-800/40 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm opacity-75 grayscale hover:grayscale-0 transition-all group overflow-hidden">
                <div class="p-5 flex flex-col md:flex-row md:items-center gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-slate-50 dark:bg-slate-900 rounded-lg flex items-center justify-center border border-slate-100 dark:border-slate-700">
                        <span class="material-icons text-slate-400">headset</span>
                    </div>
                    <div class="flex-grow">
                        <div class="flex items-center gap-3 mb-1">
                            <span class="font-semibold text-slate-900 dark:text-white">#ORD-96211</span>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
                                Cancelled
                            </span>
                        </div>
                        <div class="text-sm text-slate-500 dark:text-slate-400 flex flex-wrap gap-x-4 gap-y-1">
                            <span>Placed on Aug 12, 2023</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-[16px]">inventory_2</span> 2 items</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between md:flex-col md:items-end gap-2">
                        <span class="text-lg font-bold text-slate-900 dark:text-white">$89.99</span>
                        <a class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-500 dark:text-slate-300 hover:bg-slate-200 rounded font-medium text-sm transition-all flex items-center gap-2"
                            href="#">
                            View Details <span class="material-icons text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 flex items-center justify-center gap-2">
            <button
                class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-50 transition-colors">
                <span class="material-icons">chevron_left</span>
            </button>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-medium shadow-lg shadow-primary/20">1</button>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-50 transition-colors">2</button>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-50 transition-colors">3</button>
            <span class="px-2 text-slate-400">...</span>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-50 transition-colors">12</button>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-50 transition-colors">
                <span class="material-icons">chevron_right</span>
            </button>
        </div>
    </main>
<?php require "src/Views/Includes/footer.php"; ?>
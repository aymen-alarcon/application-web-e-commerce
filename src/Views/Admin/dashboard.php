<?php require "src/Views/Includes/sidebar.php"; ?>
        <main class="ml-64 flex-1 overflow-y-auto flex flex-col">
            <div class="p-8 max-w-[1400px] w-full mx-auto space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-blue-50 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400">
                                <span class="material-symbols-outlined">person</span>
                            </div>
                            <span
                                class="text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/30 px-2 py-1 rounded">+12%</span>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Users</p>
                        <p class="text-2xl font-bold text-[#111617] dark:text-white mt-1">1,250</p>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-green-50 dark:bg-green-900/30 rounded-lg text-green-600 dark:text-green-400">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <span
                                class="text-xs font-medium text-red-600 bg-red-50 dark:bg-red-900/30 px-2 py-1 rounded">-5%</span>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Revenue</p>
                        <p class="text-2xl font-bold text-[#111617] dark:text-white mt-1">$45,200.00</p>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-purple-50 dark:bg-purple-900/30 rounded-lg text-purple-600 dark:text-purple-400">
                                <span class="material-symbols-outlined">inventory</span>
                            </div>
                            <span
                                class="text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/30 px-2 py-1 rounded">+2%</span>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Products</p>
                        <p class="text-2xl font-bold text-[#111617] dark:text-white mt-1">320</p>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-amber-50 dark:bg-amber-900/30 rounded-lg text-amber-600 dark:text-amber-400">
                                <span class="material-symbols-outlined">pending_actions</span>
                            </div>
                            <span
                                class="text-xs font-medium text-green-600 bg-green-50 dark:bg-green-900/30 px-2 py-1 rounded">+8%</span>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Pending Orders</p>
                        <p class="text-2xl font-bold text-[#111617] dark:text-white mt-1">14</p>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-gray-100 dark:border-gray-800 flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-[#111617] dark:text-white">Recent Orders</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Overview of the last 10 orders
                                processed.</p>
                        </div>
                        <button
                            class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-50 transition-colors">View
                            All Orders</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 dark:bg-gray-800/50">
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Order ID</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Customer</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Date</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Total</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Status</th>
                                    <th
                                        class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4 text-sm font-semibold text-primary">#ORD-1024</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">John Doe
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Oct 24, 2023</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-gray-100">$124.50
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="status-processing inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold">
                                            Processing
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[18px]">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4 text-sm font-semibold text-primary">#ORD-1023</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">Jane
                                        Smith</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Oct 23, 2023</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-gray-100">$89.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="status-shipped inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold">
                                            Shipped
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[18px]">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4 text-sm font-semibold text-primary">#ORD-1022</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">Robert
                                        Brown</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Oct 22, 2023</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-gray-100">$210.00
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="status-delivered inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold">
                                            Delivered
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[18px]">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4 text-sm font-semibold text-primary">#ORD-1021</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">Emily
                                        Davis</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Oct 22, 2023</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-gray-100">$45.20</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="status-processing inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold">
                                            Processing
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[18px]">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/30 transition-colors">
                                    <td class="px-6 py-4 text-sm font-semibold text-primary">#ORD-1020</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">Michael
                                        Wilson</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Oct 21, 2023</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-gray-100">$312.00
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="status-shipped inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold">
                                            Shipped
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[18px]">more_vert</span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="px-6 py-4 border-t border-gray-100 dark:border-gray-800 flex items-center justify-between text-sm text-gray-500">
                        <p>Showing 5 of 1,240 results</p>
                        <div class="flex gap-1">
                            <button class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-800 disabled:opacity-50"
                                disabled="">
                                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                            </button>
                            <button class="px-3 py-1 rounded bg-primary text-white font-bold">1</button>
                            <button class="px-3 py-1 rounded hover:bg-gray-100 dark:hover:bg-gray-800">2</button>
                            <button class="px-3 py-1 rounded hover:bg-gray-100 dark:hover:bg-gray-800">3</button>
                            <button class="p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-800">
                                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
<?php require "src/Views/Includes/footer.php"; ?>
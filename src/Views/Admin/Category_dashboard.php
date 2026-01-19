<?php require __DIR__ . "/includes/sidebar.php"; ?>
        <main class="flex-1 ml-64 p-8">
            <div class="flex items-center gap-2 mb-2 text-sm">
                <a class="text-slate-500 hover:text-primary transition-colors" href="#">Admin</a>
                <span class="text-slate-400 select-none">/</span>
                <a class="text-slate-500 hover:text-primary transition-colors" href="#">Catalog</a>
                <span class="text-slate-400 select-none">/</span>
                <span class="text-slate-900 dark:text-white font-semibold">Categories</span>
            </div>
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">Category
                        Management</h2>
                    <p class="text-slate-500 dark:text-slate-400 mt-1">Organize and manage your product classification
                        hierarchy.</p>
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-all shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    Create New Category
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div
                    class="bg-white dark:bg-[#1e2124] p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                    <div
                        class="size-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center">
                        <span class="material-symbols-outlined">category</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Categories</p>
                        <p class="text-2xl font-black text-slate-900 dark:text-white">24</p>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-[#1e2124] p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                    <div
                        class="size-12 rounded-lg bg-emerald-50 dark:bg-emerald-900/20 text-emerald-600 flex items-center justify-center">
                        <span class="material-symbols-outlined">inventory</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Products</p>
                        <p class="text-2xl font-black text-slate-900 dark:text-white">1,284</p>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-[#1e2124] p-5 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                    <div
                        class="size-12 rounded-lg bg-amber-50 dark:bg-amber-900/20 text-amber-600 flex items-center justify-center">
                        <span class="material-symbols-outlined">visibility_off</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Hidden Categories</p>
                        <p class="text-2xl font-black text-slate-900 dark:text-white">3</p>
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#1e2124] rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                <div
                    class="p-4 border-b border-slate-200 dark:border-slate-800 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="relative w-full max-w-sm">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2 bg-slate-50 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary placeholder:text-slate-400 dark:text-white"
                            placeholder="Search categories..." type="text" />
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors border border-slate-200 dark:border-slate-800">
                            <span class="material-symbols-outlined text-[18px]">filter_list</span>
                            Filter
                        </button>
                        <button
                            class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors border border-slate-200 dark:border-slate-800">
                            <span class="material-symbols-outlined text-[18px]">download</span>
                            Export
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 dark:bg-slate-800/50">
                                <th
                                    class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider w-16">
                                    ID</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                    Category Name</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                    Description</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                    Product Count</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-mono">#001</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                            <span class="material-symbols-outlined text-[20px]">smartphone</span>
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Mobile
                                            Phones</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 max-w-xs truncate">
                                    Latest smartphones and accessories for all brands</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200">
                                        210 products
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-all"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-mono">#002</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                            <span class="material-symbols-outlined text-[20px]">laptop_mac</span>
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Laptops &amp;
                                            PCs</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 max-w-xs truncate">
                                    Workstations, gaming laptops and custom desktop builds</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200">
                                        156 products
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-all"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-mono">#003</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                            <span class="material-symbols-outlined text-[20px]">headphones</span>
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Audio
                                            Gear</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 max-w-xs truncate">
                                    Premium audio equipment, headphones and home theater systems</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200">
                                        84 products
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-all"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-mono">#004</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                            <span class="material-symbols-outlined text-[20px]">watch</span>
                                        </div>
                                        <span
                                            class="text-sm font-semibold text-slate-900 dark:text-white">Wearables</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 max-w-xs truncate">
                                    Smartwatches, fitness trackers and healthy living gadgets</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200">
                                        67 products
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-all"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-mono">#005</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                            <span class="material-symbols-outlined text-[20px]">kitchen</span>
                                        </div>
                                        <span class="text-sm font-semibold text-slate-900 dark:text-white">Smart
                                            Home</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 max-w-xs truncate">
                                    Connected appliances, lighting and security solutions</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200">
                                        125 products
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-all"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span
                            class="font-semibold text-slate-900 dark:text-white">1</span> to <span
                            class="font-semibold text-slate-900 dark:text-white">5</span> of <span
                            class="font-semibold text-slate-900 dark:text-white">24</span> results</p>
                    <div class="flex items-center gap-1">
                        <button
                            class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 disabled:opacity-30"
                            disabled="">
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </button>
                        <button
                            class="size-8 rounded flex items-center justify-center text-sm font-bold bg-primary text-white">1</button>
                        <button
                            class="size-8 rounded flex items-center justify-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">2</button>
                        <button
                            class="size-8 rounded flex items-center justify-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">3</button>
                        <button
                            class="size-8 rounded flex items-center justify-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">...</button>
                        <button
                            class="size-8 rounded flex items-center justify-center text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">5</button>
                        <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
<?php require __DIR__ . "/includes/footer.php"; ?>
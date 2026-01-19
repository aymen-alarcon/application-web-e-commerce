<?php require __DIR__ . "/includes/sidebar.php"; ?>
<main class="ml-64 flex-1 min-h-screen">
    <header
        class="bg-white dark:bg-background-dark border-b border-border-muted dark:border-gray-700 sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-8 py-6 flex flex-wrap justify-between items-center gap-4">
            <div>
                <h2 class="text-3xl font-black text-[#141415] dark:text-white tracking-tight">Manage Users</h2>
                <p class="text-sm text-[#71757a] mt-1">Control access and view registered customer accounts.</p>
            </div>
            <button
                class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-all">
                <span class="material-symbols-outlined text-sm">add</span>
                Create New User
            </button>
        </div>
    </header>
    <div class="max-w-6xl mx-auto px-8 py-8">
        <div class="mb-6">
            <div class="relative max-w-md">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <span class="material-symbols-outlined text-[#71757a]">search</span>
                </div>
                <input
                    class="block w-full pl-11 pr-4 py-3 bg-white dark:bg-gray-800 border border-border-muted dark:border-gray-700 rounded-xl focus:ring-primary focus:border-primary text-sm"
                    placeholder="Search users by name, email or ID..." type="text" />
            </div>
        </div>
        <div
            class="bg-white dark:bg-gray-800 border border-border-muted dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 dark:bg-gray-900/50 border-b border-border-muted dark:border-gray-700">
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider w-20">ID</th>
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider w-16">Avatar
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Full Name
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Email
                                Address</th>
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Role</th>
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border-muted dark:divide-gray-700">
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-[#71757a]">#001</td>
                            <td class="px-6 py-4">
                                <div class="size-9 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-700 dark:text-blue-300 font-bold text-xs"
                                    data-alt="User initials placeholder for Jane Doe">JD</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#141415] dark:text-white">Jane Doe</td>
                            <td class="px-6 py-4 text-sm text-[#71757a]">jane.doe@example.com</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-primary/10 text-primary border border-primary/20">Admin</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400 border border-green-200 dark:border-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-3">
                                    <button
                                        class="text-primary hover:text-primary/70 font-bold text-xs uppercase tracking-tight">Edit</button>
                                    <button
                                        class="text-red-600 hover:text-red-400 font-bold text-xs uppercase tracking-tight">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-[#71757a]">#002</td>
                            <td class="px-6 py-4">
                                <div class="size-9 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-700 dark:text-orange-300 font-bold text-xs"
                                    data-alt="User initials placeholder for Bob Smith">BS</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#141415] dark:text-white">Bob Smith</td>
                            <td class="px-6 py-4 text-sm text-[#71757a]">bob.smith@cloudmail.net</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600">User</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-red-100 text-red-700 dark:bg-red-900/20 dark:text-red-400 border border-red-200 dark:border-red-800">Suspended</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-3">
                                    <button
                                        class="text-primary hover:text-primary/70 font-bold text-xs uppercase tracking-tight">Edit</button>
                                    <button
                                        class="text-red-600 hover:text-red-400 font-bold text-xs uppercase tracking-tight">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-[#71757a]">#003</td>
                            <td class="px-6 py-4">
                                <div class="size-9 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-700 dark:text-purple-300 font-bold text-xs"
                                    data-alt="User initials placeholder for Alice J.">AJ</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#141415] dark:text-white">Alice Johnson
                            </td>
                            <td class="px-6 py-4 text-sm text-[#71757a]">ajohnson@provider.com</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600">User</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400 border border-green-200 dark:border-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-3">
                                    <button
                                        class="text-primary hover:text-primary/70 font-bold text-xs uppercase tracking-tight">Edit</button>
                                    <button
                                        class="text-red-600 hover:text-red-400 font-bold text-xs uppercase tracking-tight">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-[#71757a]">#004</td>
                            <td class="px-6 py-4">
                                <div class="size-9 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-700 dark:text-green-300 font-bold text-xs"
                                    data-alt="User initials placeholder for Charlie B.">CB</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#141415] dark:text-white">Charlie Brown
                            </td>
                            <td class="px-6 py-4 text-sm text-[#71757a]">charlie.brown@peanuts.org</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600">User</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400 border border-green-200 dark:border-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-3">
                                    <button
                                        class="text-primary hover:text-primary/70 font-bold text-xs uppercase tracking-tight">Edit</button>
                                    <button
                                        class="text-red-600 hover:text-red-400 font-bold text-xs uppercase tracking-tight">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-[#71757a]">#005</td>
                            <td class="px-6 py-4">
                                <div class="size-9 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center text-pink-700 dark:text-pink-300 font-bold text-xs"
                                    data-alt="User initials placeholder for Sarah M.">SM</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#141415] dark:text-white">Sarah Miller</td>
                            <td class="px-6 py-4 text-sm text-[#71757a]">smiller.ux@studio.com</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-primary/10 text-primary border border-primary/20">Admin</span>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400 border border-green-200 dark:border-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-3">
                                    <button
                                        class="text-primary hover:text-primary/70 font-bold text-xs uppercase tracking-tight">Edit</button>
                                    <button
                                        class="text-red-600 hover:text-red-400 font-bold text-xs uppercase tracking-tight">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="px-6 py-4 bg-gray-50 dark:bg-gray-900/50 border-t border-border-muted dark:border-gray-700 flex items-center justify-between">
                <p class="text-xs text-[#71757a] font-medium">Showing <span class="text-[#141415] dark:text-white">1 to
                        5</span> of 48 users</p>
                <div class="flex items-center gap-1">
                    <button
                        class="size-8 flex items-center justify-center rounded-lg border border-border-muted dark:border-gray-700 bg-white dark:bg-gray-800 text-[#71757a] hover:bg-gray-50">
                        <span class="material-symbols-outlined text-base">chevron_left</span>
                    </button>
                    <button
                        class="size-8 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-xs">1</button>
                    <button
                        class="size-8 flex items-center justify-center rounded-lg text-[#71757a] hover:bg-gray-100 dark:hover:bg-gray-700 font-medium text-xs">2</button>
                    <button
                        class="size-8 flex items-center justify-center rounded-lg text-[#71757a] hover:bg-gray-100 dark:hover:bg-gray-700 font-medium text-xs">3</button>
                    <span class="px-1 text-[#71757a]">...</span>
                    <button
                        class="size-8 flex items-center justify-center rounded-lg text-[#71757a] hover:bg-gray-100 dark:hover:bg-gray-700 font-medium text-xs">10</button>
                    <button
                        class="size-8 flex items-center justify-center rounded-lg border border-border-muted dark:border-gray-700 bg-white dark:bg-gray-800 text-[#71757a] hover:bg-gray-50">
                        <span class="material-symbols-outlined text-base">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php require __DIR__ . "/includes/footer.php"; ?>
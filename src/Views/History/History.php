<?php

use App\Controller\OrderController;

    require "src/Views/Includes/header.php"; 
    $handler = new OrderController($conn);
    $orders = $handler->readOrder();
?>
            <main class="px-10 lg:px-40 flex flex-1 justify-center py-8">
                <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                    <div class="flex flex-wrap justify-between items-end gap-3 p-4 mb-4">
                        <div class="flex min-w-72 flex-col gap-2">
                            <h1
                                class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                                Order History</h1>
                            <p class="text-[#637588] dark:text-[#a0acb9] text-base font-normal leading-normal">View your
                                past transactions and track shipping status.</p>
                        </div>
                        <div
                            class="bg-white dark:bg-[#1c2632] border border-[#dce0e5] dark:border-[#2d3a4a] px-4 py-2 rounded-lg shadow-sm">
                            <span class="text-sm font-medium text-[#637588] dark:text-[#a0acb9]">Total Orders:</span>
                            <span class="text-lg font-bold ml-2">24</span>
                        </div>
                    </div>
                    <div class="px-4 py-3 @container">
                        <div
                            class="flex overflow-hidden rounded-xl border border-[#dce0e5] dark:border-[#2d3a4a] bg-white dark:bg-[#1c2632] shadow-sm">
                            <table class="flex-1 w-full border-collapse">
                                <thead>
                                    <tr
                                        class="bg-background-light dark:bg-[#111921] border-b border-[#dce0e5] dark:border-[#2d3a4a]">
                                        <th
                                            class="px-6 py-4 text-left text-[#111418] dark:text-white text-sm font-semibold leading-normal uppercase tracking-wider">
                                            Order ID</th>
                                        <th
                                            class="px-6 py-4 text-left text-[#111418] dark:text-white text-sm font-semibold leading-normal uppercase tracking-wider">
                                            Date</th>
                                        <th
                                            class="px-6 py-4 text-left text-[#111418] dark:text-white text-sm font-semibold leading-normal uppercase tracking-wider">
                                            Total Price</th>
                                        <th
                                            class="px-6 py-4 text-left text-[#111418] dark:text-white text-sm font-semibold leading-normal uppercase tracking-wider">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#dce0e5] dark:divide-[#2d3a4a]">
                                    <?php foreach($orders as $order): ?>
                                    <tr
                                        class="hover:bg-background-light/50 dark:hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 text-[#111418] dark:text-white text-sm font-medium">
                                            #ORD-<?= $order->getId() ?></td>
                                        <td class="px-6 py-4 text-[#637588] dark:text-[#a0acb9] text-sm"><?= $order->getCreated_at() ?>
                                        </td>
                                        <td class="px-6 py-4 text-[#111418] dark:text-white text-sm font-bold">$150.00
                                        </td>
                                        <td class="px-6 py-4 text-sm font-normal">
                                            <span
                                                class="inline-flex items-center gap-1.5 rounded-full bg-green-100 dark:bg-green-900/30 px-3 py-1 text-xs font-semibold text-green-700 dark:text-green-400">
                                                <span
                                                    class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                Delivered
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex items-center justify-center p-8 gap-1">
                        <a class="flex size-10 items-center justify-center rounded-lg border border-transparent hover:border-[#dce0e5] dark:hover:border-[#2d3a4a] transition-all"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[#637588] dark:text-[#a0acb9]">chevron_left</span>
                        </a>
                        <a class="text-sm font-bold leading-normal tracking-[0.015em] flex size-10 items-center justify-center text-white rounded-lg bg-primary shadow-sm"
                            href="#">1</a>
                        <a class="text-sm font-medium leading-normal flex size-10 items-center justify-center text-[#637588] dark:text-[#a0acb9] rounded-lg hover:bg-gray-100 dark:hover:bg-white/10 transition-colors"
                            href="#">2</a>
                        <a class="text-sm font-medium leading-normal flex size-10 items-center justify-center text-[#637588] dark:text-[#a0acb9] rounded-lg hover:bg-gray-100 dark:hover:bg-white/10 transition-colors"
                            href="#">3</a>
                        <span class="text-[#637588] px-2">...</span>
                        <a class="text-sm font-medium leading-normal flex size-10 items-center justify-center text-[#637588] dark:text-[#a0acb9] rounded-lg hover:bg-gray-100 dark:hover:bg-white/10 transition-colors"
                            href="#">12</a>
                        <a class="flex size-10 items-center justify-center rounded-lg border border-transparent hover:border-[#dce0e5] dark:hover:border-[#2d3a4a] transition-all"
                            href="#">
                            <span
                                class="material-symbols-outlined text-[#637588] dark:text-[#a0acb9]">chevron_right</span>
                        </a>
                    </div>
                </div>
            </main>
<?php require "src/Views/Includes/footer.php"; ?>
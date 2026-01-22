<?php require_once "src/Views/Includes/sidebar.php"; ?>
<div id="modal-backdrop"
     class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-40"></div>
<div id="addCategoryModal"
     class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <div
    class="bg-white dark:bg-[#1e2124] w-full max-w-md rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">

    <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
      <h3 class="text-lg font-bold text-slate-900 dark:text-white">Add Category</h3>
      <button onclick="closeModal('addCategoryModal')" class="text-slate-400 hover:text-slate-600">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>

    <form class="p-5 space-y-4" method="POST" action="/registerCategoryProcess">
      <div>
        <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Category Name</label>
        <input type="text" name="name"
               class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none
                      focus:ring-2 focus:ring-primary text-sm"
               placeholder="e.g. Smartphones">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Description</label>
        <textarea rows="3" name="description" 
                  class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none
                         focus:ring-2 focus:ring-primary text-sm"
                  placeholder="Optional description"></textarea>
      </div>

      <div class="flex justify-end gap-2 pt-4">
        <button type="button"
                onclick="closeModal('addCategoryModal')"
                class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800
                       text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">
          Cancel
        </button>
        <button type="submit"
                class="px-5 py-2 bg-primary hover:bg-primary/90 text-white rounded-lg font-bold text-sm">
          Create
        </button>
      </div>
    </form>

  </div>
</div>
<div id="editCategoryModal"
     class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <div class="bg-white dark:bg-[#1e2124] w-full max-w-md rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">

    <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
      <h3 class="text-lg font-bold">Edit Category</h3>
      <button onclick="closeModal('editCategoryModal')" class="text-slate-400 hover:text-slate-600">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>

    <form class="p-5 space-y-4" method="POST" action="/updateCategoryProcess">
      <input type="hidden" id="editCategoryId" name="id">

      <div>
        <label class="text-sm font-medium">Category Name</label>
        <input id="editCategoryName" type="text" name="name"
               class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none
                      focus:ring-2 focus:ring-primary text-sm">
      </div>

      <div>
        <label class="text-sm font-medium">Description</label>
        <textarea id="editCategoryDescription" rows="3" name="description"
                  class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none
                         focus:ring-2 focus:ring-primary text-sm"></textarea>
      </div>

      <div class="flex justify-end gap-2 pt-4">
        <button type="button"
                onclick="closeModal('editCategoryModal')"
                class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800">
          Cancel
        </button>
        <button class="px-5 py-2 bg-primary text-white rounded-lg font-bold text-sm">
          Update
        </button>
      </div>
    </form>
  </div>
</div>
<div id="deleteCategoryModal"
     class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <div class="bg-white dark:bg-[#1e2124] w-full max-w-sm rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">

    <form class="p-5 text-center space-y-3" method="POST" action="/deleteCategoryProcess">
        <input type="hidden" id="deleteCategoryId" name="id">
      <div class="mx-auto size-12 rounded-full bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-red-600">
        <span class="material-symbols-outlined">delete</span>
      </div>

      <h3 class="text-lg font-bold">Delete Category?</h3>
      <p class="text-sm text-slate-500 dark:text-slate-400">
        This action cannot be undone.
      </p>

      <div class="flex justify-center gap-2 pt-4">
        <button onclick="closeModal('deleteCategoryModal')"
                class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800">
          Cancel
        </button>
        <button type="submit" class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-bold text-sm">
          Delete
</button>
      </div>
</form>

  </div>
</div>

    <main class="ml-64 flex-1 overflow-y-auto flex flex-col">
        <div class="p-8 max-w-7xl mx-auto w-full space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div
                    class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-6 rounded-xl flex flex-col gap-1">
                    <div class="flex justify-between items-start">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total
                            Orders</p>
                        <span
                            class="flex items-center text-xs font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-950/30 px-2 py-0.5 rounded-full">+12%</span>
                    </div>
                    <p class="text-3xl font-black text-slate-900 dark:text-white"><?= count($orders) ?></p>
                    <p class="text-xs text-slate-400 mt-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">history</span>
                        vs. last 30 days
                    </p>
                </div>
                <div
                    class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-6 rounded-xl flex flex-col gap-1">
                    <div class="flex justify-between items-start">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                            Pending Fulfillment</p>
                        <span
                            class="flex items-center text-xs font-bold text-rose-600 bg-rose-50 dark:bg-rose-950/30 px-2 py-0.5 rounded-full">-5%</span>
                    </div>
                    <p class="text-3xl font-black text-slate-900 dark:text-white">42</p>
                    <p class="text-xs text-slate-400 mt-2">Critical attention required</p>
                </div>
            </div>
            <div
                class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl overflow-hidden shadow-sm">
                <div class="p-4 border-b border-slate-100 dark:border-slate-800 flex flex-wrap items-center gap-4">
                    <div class="flex-1 min-w-[300px]">
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
                            <input
                                class="w-full bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary/20 rounded-lg pl-10 pr-4 h-11 text-sm placeholder:text-slate-400 transition-all"
                                placeholder="Search Order ID, customer email, or product..." type="text" />
                        </div>
                    </div>
                    <div class="flex items-center gap-2 overflow-x-auto pb-2 md:pb-0 scrollbar-hide">
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary/10 text-primary px-4 border border-primary/20 hover:bg-primary/20 transition-colors">
                            <span class="text-sm font-bold">All Orders</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-slate-50 dark:bg-slate-800 px-4 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition-all">
                            <span class="text-slate-600 dark:text-slate-300 text-sm font-medium">Pending</span>
                            <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-slate-50 dark:bg-slate-800 px-4 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition-all">
                            <span class="text-slate-600 dark:text-slate-300 text-sm font-medium">Paid</span>
                            <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </button>
                        <button
                            class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-slate-50 dark:bg-slate-800 px-4 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition-all">
                            <span class="text-slate-600 dark:text-slate-300 text-sm font-medium">Shipped</span>
                            <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-slate-50 dark:bg-slate-800/50">
                            <tr>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                    Order ID</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                    Date</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                    Customer</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                    Total</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                    Payment</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                    Fulfillment</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 text-right">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors cursor-default group">
                                <?php if(count($orders) > 0): ?>
                                    <?php foreach($orders as $order): ?>
                                        <td class="px-6 py-4">
                                            <span class="font-bold text-slate-900 dark:text-white">#ORD-<?= $order->getId() ?></span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400"><?= $order->getCreated_at() ?></td>
                                        <td class="px-6 py-4">
                                            <div class="flex flex-col">
                                                <span class="text-sm font-semibold text-slate-900 dark:text-white"><?= $order->getFirst_name() . " " . $order->getLast_name() ?></span>
                                                <span class="text-xs text-slate-500"><?= $order->getEmail() ?></span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 font-bold text-slate-900 dark:text-white">$1,299.00</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">
                                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">
                                                Shipped
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="p-2 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                                <span
                                                    class="material-symbols-outlined text-[20px] text-slate-400 group-hover:text-primary">visibility</span>
                                            </button>
                                        </td>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">There are no orders Yet</td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="p-6 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/20 flex items-center justify-between">
                    <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span
                            class="font-semibold text-slate-900 dark:text-white">1</span> to <span
                            class="font-semibold text-slate-900 dark:text-white">10</span> of <span
                            class="font-semibold text-slate-900 dark:text-white"><?= count($orders) ?></span> orders</p>
                    <div class="flex items-center gap-2">
                        <button
                            class="h-9 w-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-white dark:hover:bg-slate-800 disabled:opacity-50 transition-all"
                            disabled="">
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </button>
                        <button
                            class="h-9 w-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-primary font-bold shadow-sm">1</button>
                        <button
                            class="h-9 w-9 flex items-center justify-center rounded-lg border border-transparent hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">2</button>
                        <button
                            class="h-9 w-9 flex items-center justify-center rounded-lg border border-transparent hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">3</button>
                        <span class="text-slate-400 px-1">...</span>
                        <button
                            class="h-9 w-9 flex items-center justify-center rounded-lg border border-transparent hover:bg-slate-200 dark:hover:bg-slate-700 transition-all">129</button>
                        <button
                            class="h-9 w-9 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-white dark:hover:bg-slate-800 transition-all">
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

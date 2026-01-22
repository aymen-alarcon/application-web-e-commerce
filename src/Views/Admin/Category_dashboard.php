<?php require "src/Views/Includes/sidebar.php"; ?>

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

<main class="flex-1 ml-64 p-8">
            <div class="flex items-center gap-2 mb-2 text-sm">
                <a class="text-slate-500 hover:text-primary transition-colors" href="#">Admin</a>
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
                <button onclick="openModal('addCategoryModal')"
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
                        <p class="text-2xl font-black text-slate-900 dark:text-white"><?= count($categories) ?></p>
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
                        <p class="text-2xl font-black text-slate-900 dark:text-white"><?= count($products) ?></p>
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
                            <?php if(count($categories) > 0): ?>
                                <?php foreach($categories as $category): ?>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                        <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-mono">#00<?= $category->getId() ?></td>
                                        <td class="px-6 py-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="size-8 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                                    <span class="material-symbols-outlined text-[20px]">smartphone</span>
                                                </div>
                                                <span class="text-sm font-semibold text-slate-900 dark:text-white"><?= $category->getName() ?></span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 max-w-xs truncate"><?= $category->getDescription() ?></td>
                                        <td class="px-6 py-5">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200">
                                                210 products
                                            </span>
                                        </td>
                                        <td class="px-6 py-5 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <button onclick="openEditModal(<?= $category->getId() ?>,'<?= addslashes($category->getName()) ?>','<?= addslashes($category->getDescription()) ?>')"
                                                    class="p-2 text-slate-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                                <button onclick="openDeleteModal(<?= $category->getId() ?>)"
                                                    class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-all"
                                                    title="Delete">
                                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">There are no orders Yet</td>
                                <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span
                            class="font-semibold text-slate-900 dark:text-white">1</span> to <span
                            class="font-semibold text-slate-900 dark:text-white">5</span> of <span
                            class="font-semibold text-slate-900 dark:text-white"><?= count($categories) ?></span> results</p>
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
<?php require "src/Views/Includes/footer.php"; ?>
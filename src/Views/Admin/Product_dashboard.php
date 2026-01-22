<?php require_once "src/Views/Includes/sidebar.php"; ?>
<div id="modal-backdrop" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-40"></div>
<div id="addProductModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
    <div class="bg-white dark:bg-[#1e2124] w-full max-w-md rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">
        <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Add Product</h3>
            <button onclick="closeModal('addProductModal')" class="text-slate-400 hover:text-slate-600">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form class="p-5 space-y-4" method="POST" action="/registerProductProcess">
            <div>
                <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Product Name</label>
                <input type="text" name="name" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="e.g. Smartphones">
            </div>
            <div>
                <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Description</label>
                <textarea rows="3" name="description"  class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="Optional description"></textarea>
            </div>
            <select name="category" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm">
                <?php foreach($categories as $category): ?>
                    <option name="category" value="<?= $category->getId() ?>"><?= $category->getName() ?></option>
                <?php endforeach; ?>
            </select>
            <div>
                <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Price</label>
                <input type="number" name="price" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="Optional Price"></textarea>
            </div>
            <div>
                <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Stock</label>
                <input type="number" name="stock"  class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm"placeholder="Optional Stock"></textarea>
            </div>
            <div class="flex justify-end gap-2 pt-4">
                <button type="button" onclick="closeModal('addProductModal')" class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">
                    Cancel
                </button>
                <button type="submit" class="px-5 py-2 bg-primary hover:bg-primary/90 text-white rounded-lg font-bold text-sm">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
<div id="editProductModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
    <div class="bg-white dark:bg-[#1e2124] w-full max-w-md rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">
        <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
            <h3 class="text-lg font-bold">Edit Product</h3>
            <button onclick="closeModal('editProductModal')" class="text-slate-400 hover:text-slate-600">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form class="p-5 space-y-4" method="POST" action="/updateProductProcess">
            <input type="hidden" id="editProductId" name="id">
            <div>
                <label class="text-sm font-medium">Product Name</label>
                <input id="editProductName" type="text" name="name" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-non focus:ring-2 focus:ring-primary text-sm">
            </div>
            <div>
                <label class="text-sm font-medium">Description</label>
                <textarea id="editProductDescription" rows="3" name="description" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm"></textarea>
            </div>
            <div>
                <label class="text-sm font-medium">Category</label>
                <input type="number" id="editProductCategory" name="category" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm"></textarea>
            </div>
            <div>
                <label class="text-sm font-medium">Price</label>
                <input type="number" id="editProductPrice" rows="3" name="price" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm"></textarea>
            </div>
            <div>
                <label class="text-sm font-medium">Stock</label>
                <input type="number" id="editProductStock" rows="3" name="stock" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm"></textarea>
            </div>
            <div class="flex justify-end gap-2 pt-4">
                <button type="button" onclick="closeModal('editProductModal')" class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800">
                    Cancel
                </button>
                <button class="px-5 py-2 bg-primary text-white rounded-lg font-bold text-sm">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
<div id="deleteProductModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
    <div class="bg-white dark:bg-[#1e2124] w-full max-w-sm rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">
        <form class="p-5 text-center space-y-3" method="POST" action="/deleteProductProcess">
            <input type="hidden" id="deleteProductId" name="id">
            <div class="mx-auto size-12 rounded-full bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-red-600">
                <span class="material-symbols-outlined">delete</span>
            </div>
            <h3 class="text-lg font-bold">Delete Product?</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400">This action cannot be undone.</p>
            <div class="flex justify-center gap-2 pt-4">
                <button onclick="closeModal('deleteProductModal')" class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800">
                    Cancel
                </button>
                <button type="submit" class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-bold text-sm">
                    Delete
                </button>
            </div>
        </form>
    </div>
</div>

<body class="antialiased">
    <div class="flex min-h-screen">
        <main class="ml-64 w-[calc(100vw-16rem)] flex flex-col min-w-0">
            <div class="bg-white border-b border-neutral-border px-8 py-5 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-neutral-text-main">Product Inventory</h2>
                    <p class="text-neutral-text-muted text-xs">Manage and track your electronic goods catalog</p>
                </div>
                <button onclick="openModal('addProductModal')"
                    class="bg-primary text-white hover:bg-primary/90 text-white px-4 h-10 rounded-md font-semibold text-sm flex items-center gap-2 transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-lg">add</span>
                    <span>Add New Product</span>
                </button>
            </div>
            <div class="px-8 py-8">
                <div
                    class="bg-white border border-neutral-border rounded-lg p-4 mb-6 flex flex-wrap gap-4 items-center">
                    <div class="flex-1 min-w-[300px]">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-text-muted">
                                <span class="material-symbols-outlined text-lg">search</span>
                            </span>
                            <input
                                class="w-full h-10 pl-10 pr-4 bg-slate-50 border border-neutral-border rounded-md focus:ring-1 focus:ring-accent focus:border-accent text-sm text-neutral-text-main placeholder:text-neutral-text-muted"
                                placeholder="Search by name, SKU or brand..." type="text" />
                        </div>
                    </div>
                    <div class="w-48">
                        <select
                            class="w-full h-10 bg-white border border-neutral-border rounded-md px-3 text-sm font-medium focus:ring-1 focus:ring-accent focus:border-accent text-neutral-text-main">
                            <option>All Categories</option>
                            <option>Headphones</option>
                            <option>Laptops</option>
                            <option>Smartphones</option>
                            <option>Tablets</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                    <button
                        class="h-10 px-4 border border-neutral-border rounded-md flex items-center gap-2 text-neutral-text-muted hover:bg-slate-50 transition-colors bg-white">
                        <span class="material-symbols-outlined text-lg">tune</span>
                        <span class="text-sm font-medium">Filters</span>
                    </button>
                </div>
                <div class="bg-white border border-neutral-border rounded-lg overflow-hidden shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-neutral-border bg-slate-50">
                                    <th
                                        class="px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-neutral-text-muted">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-neutral-text-muted">
                                        Product Name</th>
                                    <th
                                        class="px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-neutral-text-muted">
                                        Category</th>
                                    <th
                                        class="px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-neutral-text-muted">
                                        Price</th>
                                    <th
                                        class="px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-neutral-text-muted">
                                        Stock Level</th>
                                    <th
                                        class="px-6 py-3 text-[11px] font-bold uppercase tracking-wider text-neutral-text-muted text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-border">
                                <?php if(count($products) > 0): ?>
                                    <?php foreach($products as $product): ?>
                                        <tr class="hover:bg-slate-50/50 transition-colors group">
                                            <td class="px-6 py-4">
                                                <span class="text-xs font-medium text-neutral-text-muted">#<?= $product->getId() ?></span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm font-semibold text-neutral-text-main"><?= $product->getName() ?></p>
                                                <p class="text-[11px] text-neutral-text-muted uppercase font-medium"><?= $product->getDescription() ?></p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-slate-100 text-slate-700">Headphones</span>
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-neutral-text-main">$<?= $product->getPrice() ?></td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-20 bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                                        <div class="bg-blue-500 h-full w-[85%]"></div>
                                                    </div>
                                                    <span class="text-[11px] font-semibold text-blue-600"><?= $product->getStock() ?> units</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button onclick="openEditModal(<?= $product->getId() ?>,'<?= $product->getName() ?>','<?= $product->getDescription() ?>','<?= $product->getPrice() ?>', '<?= $product->getStock() ?>', '<?= $product->getCategory_id() ?>')"
                                                        class="p-1.5 hover:bg-white border border-transparent hover:border-neutral-border rounded text-neutral-text-muted hover:text-accent">
                                                        <span class="material-symbols-outlined text-lg">edit</span>
                                                    </button>
                                                    <button onclick="openDeleteModal(<?= $product->getId() ?>)"
                                                        class="p-1.5 hover:bg-white border border-transparent hover:border-neutral-border rounded text-neutral-text-muted hover:text-red-600">
                                                        <span class="material-symbols-outlined text-lg">delete</span>
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
                    <div
                        class="px-6 py-4 border-t border-neutral-border flex items-center justify-between bg-slate-50/50">
                        <p class="text-xs text-neutral-text-muted font-medium">
                            Showing <span class="text-neutral-text-main">1</span> to <span
                                class="text-neutral-text-main">5</span> of <span
                                class="text-neutral-text-main">150</span> items
                        </p>
                        <div class="flex gap-1">
                            <button
                                class="size-8 flex items-center justify-center rounded border border-neutral-border bg-white hover:bg-slate-100 transition-colors text-neutral-text-muted">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </button>
                            <button
                                class="size-8 flex items-center justify-center rounded bg-primary text-white font-bold text-xs">1</button>
                            <button
                                class="size-8 flex items-center justify-center rounded border border-transparent hover:border-neutral-border bg-transparent hover:bg-white transition-colors text-neutral-text-muted font-bold text-xs">2</button>
                            <button
                                class="size-8 flex items-center justify-center rounded border border-transparent hover:border-neutral-border bg-transparent hover:bg-white transition-colors text-neutral-text-muted font-bold text-xs">3</button>
                            <button
                                class="size-8 flex items-center justify-center rounded border border-neutral-border bg-white hover:bg-slate-100 transition-colors text-neutral-text-muted">
                                <span class="material-symbols-outlined text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<?php require "src/Views/Includes/footer.php"; ?>
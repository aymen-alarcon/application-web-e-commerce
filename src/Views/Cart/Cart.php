<?php
    use App\Models\Product;
    require_once "src/Views/Includes/header.php"; 
?>
            <main class="flex-1 px-6 lg:px-40 py-8 max-w-[1440px] mx-auto w-full">
                <div class="flex flex-wrap items-center gap-2 mb-6">
                    <a class="text-[#647e87] dark:text-gray-400 text-sm font-medium hover:text-primary"
                        href="/Home">Home</a>
                    <span class="text-[#647e87] dark:text-gray-600 text-sm">/</span>
                    <span class="text-primary text-sm font-bold">Shopping Cart</span>
                </div>
                <div class="flex flex-wrap items-baseline justify-between gap-3 mb-8">
                    <h1 class="text-[#111617] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                        Your Shopping Cart</h1>
                    <span class="text-[#647e87] dark:text-gray-400 font-medium"><?= count($_SESSION["cart"]) ?> items in your bag</span>
                </div>
                <div class="flex flex-col xl:flex-row gap-8 items-start">
                    <div class="flex-1 w-full @container">
                        <div
                            class="overflow-hidden rounded-xl border border-[#dce3e5] dark:border-gray-700 bg-white dark:bg-gray-900 shadow-sm">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-[#F7F8FA] dark:bg-gray-800/50">
                                        <th
                                            class="px-6 py-4 text-[#111617] dark:text-gray-300 text-xs font-bold uppercase tracking-wider">
                                            Product</th>
                                        <th
                                            class="px-6 py-4 text-[#111617] dark:text-gray-300 text-xs font-bold uppercase tracking-wider hidden md:table-cell">
                                            Price</th>
                                        <th
                                            class="px-6 py-4 text-[#111617] dark:text-gray-300 text-xs font-bold uppercase tracking-wider text-center">
                                            Quantity</th>
                                        <th
                                            class="px-6 py-4 text-[#111617] dark:text-gray-300 text-xs font-bold uppercase tracking-wider text-right">
                                            Subtotal</th>
                                        <th
                                            class="px-6 py-4 text-[#111617] dark:text-gray-300 text-xs font-bold uppercase tracking-wider">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#dce3e5] dark:divide-gray-700">
                                    <form action="/registerOrderProcess" method="post">
                                        <?php     
                                            $products = new Product($conn);
                                            foreach ($_SESSION["cart"] as $productId) {
                                                $orderItems = $products->readById($productId);
                                        ?>
                                        <tr class="group product-container hover:bg-primary/[0.02] transition-colors">
                                            <td class="px-6 py-6">
                                                <div class="flex items-center gap-4">
                                                    <div class="bg-center bg-no-repeat bg-cover rounded-lg w-20 h-20 bg-gray-100 flex-shrink-0"
                                                        data-alt="High-performance laptop with 16GB RAM"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBq56w0QQftH25qWep8j4Vfrd2RFwSwUwltkmw1_KOBzd8ZnbHml6lG8HEda3cwOq-qWuqN2G11u2Q2Kc1GRk4SVrOiLfmD92syCVUjPHBlnHN7JapKoY70ddYGAY2IjyFbToOKye4WWIdQr-01gzWpIHSVowEGxkjod-Ld3NmbQIwDwgPCzk6XkFx_86Vr4PMKn1jayXWM5wi8eqvFrooHEqr-PS6xZ3Q-k5lRHG9F6-Z95uO3fGcwiTsdUe-wE2YTFDwtaNhybR0");'>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <span class="text-[#111617] dark:text-white font-bold text-base">
                                                            <?= htmlspecialchars($orderItems->getName()) ?>
                                                        </span>
                                                        <span class="text-[#647e87] dark:text-gray-400 text-xs mt-1">
                                                            <?= htmlspecialchars($orderItems->getDescription()) ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-6 hidden md:table-cell price">
                                                <?= number_format($orderItems->getPrice(), 2) ?>
                                            </td>

                                            <td class="px-6 py-6 text-center quantity">
                                                <input type="number" name="quantity" placeholder="1" min="1" max="<?= $orderItems->getStock() ?>" value="2">
                                            </td>

                                            <td class="px-6 py-6 text-right priceTotal">
        
                                            </td>

                                            <td class="px-6 py-6 text-center">
                                                <a href="/cart/remove/<?= $orderItems->getId() ?>"
                                                class="text-gray-400 hover:text-accent-red transition-colors">
                                                    <span class="material-symbols-outlined">delete_outline</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-8 flex justify-between items-center">
                            <a class="flex items-center gap-2 text-primary font-bold text-sm hover:underline" href="#">
                                <span class="material-symbols-outlined text-[18px]">keyboard_backspace</span>
                                Continue Shopping
                            </a>
                            <button
                                class="text-[#647e87] dark:text-gray-400 text-sm font-medium hover:text-accent-red flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">delete_sweep</span>
                                Clear Shopping Cart
                            </button>
                        </div>
                    </div>
                    <div class="w-full xl:w-[380px] flex flex-col gap-4">
                        <div
                            class="rounded-xl border border-[#dce3e5] dark:border-gray-700 bg-white dark:bg-gray-900 shadow-[0_4px_12px_rgba(0,0,0,0.04)] p-6">
                            <h3 class="text-[#111617] dark:text-white text-lg font-bold mb-6">Order Summary</h3>
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between items-center">
                                    <span class="text-[#647e87] dark:text-gray-400 font-medium">Subtotal</span>
                                    <span class="text-[#111617] dark:text-white font-bold Total-Price"></span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#647e87] dark:text-gray-400 font-medium">Shipping</span>
                                    <span class="text-green-600 font-bold">FREE</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[#647e87] dark:text-gray-400 font-medium">Tax Estimate</span>
                                    <span class="text-[#111617] dark:text-white font-bold">$15.00</span>
                                </div>
                            </div>
                            <div class="pt-6 border-t border-[#dce3e5] dark:border-gray-700 mb-8">
                                <div class="flex justify-between items-center">
                                    <span class="text-[#111617] dark:text-white text-lg font-black">Grand Total</span>
                                    <span class="text-primary text-2xl font-black Grand-Total">$1,492.00</span>
                                </div>
                            </div>
                            <button
                                class="w-full bg-primary text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2 group">
                                Proceed to Checkout
                                <span
                                    class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </button>
                                    </form>
                        </div>
                        <div class="rounded-xl border border-dashed border-[#dce3e5] dark:border-gray-700 p-6">
                            <div class="flex gap-4">
                                <span class="material-symbols-outlined text-primary">support_agent</span>
                                <div>
                                    <p class="text-sm font-bold text-[#111617] dark:text-white">Need help with your
                                        order?</p>
                                    <p class="text-xs text-[#647e87] dark:text-gray-400 mt-1">Our support team is
                                        available 24/7. Call us at 1-800-ELECTRO or chat with us online.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
<?php require_once "src/Views/Includes/footer.php"; ?>
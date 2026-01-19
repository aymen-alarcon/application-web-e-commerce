<?php require __DIR__ . "/includes/header.php"; ?>
            <main class="flex-1 px-6 lg:px-40 py-8 max-w-[1440px] mx-auto w-full">
                <div class="flex flex-wrap items-center gap-2 mb-6">
                    <a class="text-[#647e87] dark:text-gray-400 text-sm font-medium hover:text-primary"
                        href="#">Home</a>
                    <span class="text-[#647e87] dark:text-gray-600 text-sm">/</span>
                    <span class="text-primary text-sm font-bold">Shopping Cart</span>
                </div>
                <div class="flex flex-wrap items-baseline justify-between gap-3 mb-8">
                    <h1 class="text-[#111617] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                        Your Shopping Cart</h1>
                    <span class="text-[#647e87] dark:text-gray-400 font-medium">3 items in your bag</span>
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
                                    <tr class="group hover:bg-primary/[0.02] transition-colors">
                                        <td class="px-6 py-6">
                                            <div class="flex items-center gap-4">
                                                <div class="bg-center bg-no-repeat bg-cover rounded-lg w-20 h-20 bg-gray-100 flex-shrink-0"
                                                    data-alt="High-performance laptop with 16GB RAM"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBq56w0QQftH25qWep8j4Vfrd2RFwSwUwltkmw1_KOBzd8ZnbHml6lG8HEda3cwOq-qWuqN2G11u2Q2Kc1GRk4SVrOiLfmD92syCVUjPHBlnHN7JapKoY70ddYGAY2IjyFbToOKye4WWIdQr-01gzWpIHSVowEGxkjod-Ld3NmbQIwDwgPCzk6XkFx_86Vr4PMKn1jayXWM5wi8eqvFrooHEqr-PS6xZ3Q-k5lRHG9F6-Z95uO3fGcwiTsdUe-wE2YTFDwtaNhybR0");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-[#111617] dark:text-white font-bold text-base leading-tight">ProMax
                                                        16 Laptop</span>
                                                    <span class="text-[#647e87] dark:text-gray-400 text-xs mt-1">16GB
                                                        RAM, 512GB SSD, Silver</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-6 hidden md:table-cell">
                                            <span class="text-[#647e87] dark:text-gray-300 font-medium">$1,299.00</span>
                                        </td>
                                        <td class="px-6 py-6">
                                            <div class="flex items-center justify-center">
                                                <div
                                                    class="flex items-center border border-[#dce3e5] dark:border-gray-600 rounded-lg overflow-hidden h-9">
                                                    <button
                                                        class="px-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-primary transition-colors"><span
                                                            class="material-symbols-outlined text-sm">remove</span></button>
                                                    <input
                                                        class="w-10 text-center border-none bg-transparent text-sm font-bold focus:ring-0 p-0"
                                                        type="text" value="1" />
                                                    <button
                                                        class="px-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-primary transition-colors"><span
                                                            class="material-symbols-outlined text-sm">add</span></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-6 text-right">
                                            <span class="text-[#111617] dark:text-white font-bold">$1,299.00</span>
                                        </td>
                                        <td class="px-6 py-6 text-center">
                                            <button class="text-gray-400 hover:text-accent-red transition-colors">
                                                <span class="material-symbols-outlined">delete_outline</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-primary/[0.02] transition-colors">
                                        <td class="px-6 py-6">
                                            <div class="flex items-center gap-4">
                                                <div class="bg-center bg-no-repeat bg-cover rounded-lg w-20 h-20 bg-gray-100 flex-shrink-0"
                                                    data-alt="RGB Backlit mechanical keyboard"
                                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_GjOrsI2R6xJqYtq_zGlTZIWD6xRsn-nBs06CXdOWaNdpUvVYDob75a5UHOS78qclgIoleZWySIjUF4avrzAt76WAkDxhmwVfqqqsXshEjB-xSNmj5NIXSZyBTHuEmBeu3co_5WxbQ1JFGkuq0ntSzPtboG3lnWj3PSZICZzggC4VwvCO8-IYk0_kfH7IzPDTix7e9cw2Prg6OBLxZC5H017adAFyLukKjJO5GbI7pDZCF7_wIJn_I_QfBOCNhEQ00ots-c-mEBE");'>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-[#111617] dark:text-white font-bold text-base leading-tight">Mechanic
                                                        RGB Keyboard</span>
                                                    <span class="text-[#647e87] dark:text-gray-400 text-xs mt-1">Brown
                                                        Switches, Wired</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-6 hidden md:table-cell">
                                            <span class="text-[#647e87] dark:text-gray-300 font-medium">$89.00</span>
                                        </td>
                                        <td class="px-6 py-6">
                                            <div class="flex items-center justify-center">
                                                <div
                                                    class="flex items-center border border-[#dce3e5] dark:border-gray-600 rounded-lg overflow-hidden h-9">
                                                    <button
                                                        class="px-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-primary transition-colors"><span
                                                            class="material-symbols-outlined text-sm">remove</span></button>
                                                    <input
                                                        class="w-10 text-center border-none bg-transparent text-sm font-bold focus:ring-0 p-0"
                                                        type="text" value="2" />
                                                    <button
                                                        class="px-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-primary transition-colors"><span
                                                            class="material-symbols-outlined text-sm">add</span></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-6 text-right">
                                            <span class="text-[#111617] dark:text-white font-bold">$178.00</span>
                                        </td>
                                        <td class="px-6 py-6 text-center">
                                            <button class="text-gray-400 hover:text-accent-red transition-colors">
                                                <span class="material-symbols-outlined">delete_outline</span>
                                            </button>
                                        </td>
                                    </tr>
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
                                    <span class="text-[#111617] dark:text-white font-bold">$1,477.00</span>
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
                                    <span class="text-primary text-2xl font-black">$1,492.00</span>
                                </div>
                            </div>
                            <div class="mb-8">
                                <p
                                    class="text-xs font-bold text-[#111617] dark:text-gray-300 uppercase tracking-widest mb-3">
                                    Promo Code</p>
                                <div class="flex gap-2">
                                    <input
                                        class="flex-1 bg-[#F7F8FA] dark:bg-gray-800 border-none rounded-lg text-sm focus:ring-1 focus:ring-primary px-3 h-10"
                                        placeholder="Enter code" type="text" />
                                    <button
                                        class="bg-gray-200 dark:bg-gray-700 text-[#111617] dark:text-white px-4 rounded-lg text-xs font-bold uppercase hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">Apply</button>
                                </div>
                            </div>
                            <button
                                class="w-full bg-primary text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all flex items-center justify-center gap-2 group">
                                Proceed to Checkout
                                <span
                                    class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </button>
                            <div class="mt-6 flex flex-col gap-4 text-center">
                                <p
                                    class="text-[10px] text-[#647e87] dark:text-gray-500 uppercase font-medium tracking-tighter">
                                    Secure Checkout Powered by Stripe</p>
                                <div class="flex justify-center gap-3 opacity-40 grayscale">
                                    <span class="material-symbols-outlined">credit_card</span>
                                    <span class="material-symbols-outlined">account_balance_wallet</span>
                                    <span class="material-symbols-outlined">contactless</span>
                                </div>
                            </div>
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
<?php require __DIR__ . "/includes/footer.php"; ?>
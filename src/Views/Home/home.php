<?php 
    require "src/Views/Includes/header.php";

use App\config\DatabaseConnection;
use App\Models\Product;

    $conn = DatabaseConnection::getInstance()->getConnection();
    $handler = new Product($conn);
    $products = $handler->read();
?>
            <main class="flex-1 max-w-[1280px] mx-auto w-full px-4 lg:px-40 py-8 space-y-12">
                <section class="@container">
                    <div
                        class="flex flex-col gap-8 lg:flex-row bg-[#f1f5f9] dark:bg-[#1e2329] rounded-2xl overflow-hidden border border-[#e2e8f0] dark:border-[#2d333a]">
                        <a href="/Product" class="w-full lg:w-3/5 bg-center bg-no-repeat aspect-video lg:aspect-auto bg-cover"
                            data-alt="High-end studio wireless headphones on a minimalist background"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9pP8TNhK9pHRglSRaHQ6SBbb95wmJqHq2ocOjC8KTmzUFKo8FLUUPTsIcRLfHdoQzIsqjCD6MdkDpqc1E2r-H8WawbggUxtQ5yL64YsMgqQekSwgpAQLSccSgiI8Ww0WHPA2Om9-EbYez-EJCe9d2F2tvQqFn7CkA325Wt1fIdLHPNt1fG77NWz0-v9GiuxpHouTKW8dvIpGhecnf-2njVr9AeqsuG1c1J7ukjmrIkPDGRnMvmV47FTNogRxJuoaSMD0ouO4mxls");'>
                        </a>
                        <div class="flex flex-col gap-6 p-8 lg:p-12 lg:w-2/5 justify-center">
                            <div class="flex flex-col gap-3">
                                <span class="text-primary font-bold tracking-widest text-xs uppercase">New Arrival</span>
                                <h1
                                    class="text-[#111418] dark:text-white text-4xl lg:text-5xl font-black leading-tight tracking-tight">
                                    The Future of Sound
                                </h1>
                                <p class="text-[#64748b] dark:text-white/60 text-base font-normal leading-relaxed">
                                    Experience unparalleled clarity and noise cancellation with the new flagship
                                    wireless series. For the creators and the dreamers.
                                </p>
                            </div>
                            <div class="flex gap-3">
                                <button
                                    class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                                    Shop Now
                                </button>
                                <button
                                    class="flex size-12 items-center justify-center rounded-lg border-2 border-[#dbe0e6] dark:border-[#3a424a] text-[#111418] dark:text-white hover:bg-white dark:hover:bg-[#23282e] transition-all">
                                    <span class="material-symbols-outlined">favorite</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div
                        class="flex flex-1 gap-4 rounded-xl border border-[#e2e8f0] dark:border-[#2d333a] bg-white dark:bg-[#1e2329] p-6 items-center shadow-sm">
                        <div class="size-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined">local_shipping</span>
                        </div>
                        <div>
                            <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">Free Shipping
                            </h2>
                            <p class="text-xs text-[#64748b] dark:text-white/50">On all orders over $99</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-1 gap-4 rounded-xl border border-[#e2e8f0] dark:border-[#2d333a] bg-white dark:bg-[#1e2329] p-6 items-center shadow-sm">
                        <div class="size-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined">verified_user</span>
                        </div>
                        <div>
                            <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">2-Year Warranty
                            </h2>
                            <p class="text-xs text-[#64748b] dark:text-white/50">Full coverage protection</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-1 gap-4 rounded-xl border border-[#e2e8f0] dark:border-[#2d333a] bg-white dark:bg-[#1e2329] p-6 items-center shadow-sm">
                        <div class="size-12 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined">support_agent</span>
                        </div>
                        <div>
                            <h2 class="text-[#111418] dark:text-white text-base font-bold leading-tight">24/7 Support
                            </h2>
                            <p class="text-xs text-[#64748b] dark:text-white/50">Expert help anytime</p>
                        </div>
                    </div>
                </section>
                <section class="space-y-4">
                    <div class="flex items-center justify-between px-2">
                        <h2 class="text-[#111418] dark:text-white text-2xl font-black leading-tight tracking-tight">New Arrivals</h2>
                        <a class="text-primary text-sm font-bold hover:underline flex items-center gap-1" href="#">
                            See All <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                    <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
                        <button
                            class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary text-white px-5 text-sm font-semibold">
                            All Products
                        </button>
                        <button
                            class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f4] dark:bg-[#23282e] text-[#111418] dark:text-white px-5 text-sm font-semibold hover:bg-[#e2e8f0] dark:hover:bg-[#2d333a]">
                            Laptops
                        </button>
                        <button
                            class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f4] dark:bg-[#23282e] text-[#111418] dark:text-white px-5 text-sm font-semibold hover:bg-[#e2e8f0] dark:hover:bg-[#2d333a]">
                            Smartphones
                        </button>
                        <button
                            class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f4] dark:bg-[#23282e] text-[#111418] dark:text-white px-5 text-sm font-semibold hover:bg-[#e2e8f0] dark:hover:bg-[#2d333a]">
                            Audio Gear
                        </button>
                        <button
                            class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f4] dark:bg-[#23282e] text-[#111418] dark:text-white px-5 text-sm font-semibold hover:bg-[#e2e8f0] dark:hover:bg-[#2d333a]">
                            Gaming
                        </button>
                    </div>
                </section>
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($products as $product): ?>
                    <div
                        class="group flex flex-col bg-white dark:bg-[#1e2329] border border-[#e2e8f0] dark:border-[#2d333a] rounded-xl overflow-hidden transition-all hover:shadow-xl hover:shadow-primary/5 hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden bg-[#f1f5f9] dark:bg-[#2d333a]">
                            <a href="/Product?id=<?= $product->getId() ?>" class="absolute inset-0 bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-110"
                                data-alt="MacBook Pro M3 in Space Gray"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDZyHBKT3F3BRAOj5Kuty4WlqZEYLoSHfr8micg9SyCUk8RI_e9tDy7CZ06cGMHKOw1-fQO012-j4cZGMcKRVO3pknYLdzD9-87j4u8Eqo2TNuXy-47ytb6EgyuVFGrC5QMrxJpvpFLpqQn-R6Vnxibclx_L1Xeo_6zVEwMYPSo8zhc3xsczD38BSf3Ru-_PzLYMaBCju_r09LwmXY4z0c6XI-sSP-WDNczPuD0rIpPC6mN8xGFOP9SPGxnGcefmGJpR4oK1hfwveo");'>
                            </a>
                            <span
                                class="absolute top-3 left-3 px-2 py-1 bg-white/90 dark:bg-black/50 backdrop-blur-sm text-[10px] font-bold rounded uppercase dark:text-white">In
                                Stock</span>
                        </div>
                        <div class="p-5 space-y-4 flex flex-col flex-1">
                            <div class="space-y-1">
                                <h3 class="text-sm text-[#64748b] dark:text-white/50 font-medium">Apple</h3>
                                <p class="text-base font-bold text-[#111418] dark:text-white line-clamp-1"><?= $product->getName() ?></p>
                            </div>
                            <div class="mt-auto flex items-center justify-between gap-2">
                                <div class="flex flex-col">
                                    <span class="text-xl font-black text-[#111418] dark:text-white">$<?= $product->getPrice() ?></span>
                                </div>
                                <button
                                    class="flex size-10 items-center justify-center rounded-lg bg-primary text-white hover:bg-primary/90 transition-colors">
                                    <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </section>
            </main>
<?php require "src/Views/Includes/footer.php"; ?>
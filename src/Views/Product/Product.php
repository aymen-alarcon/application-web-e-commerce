<?php
    require "src/Views/Includes/header.php";
    use App\Models\Product;

    $handler = new Product($conn);
    $product = $handler->readById($_GET["id"]);
?>
    <main class="max-w-[1280px] mx-auto px-6 py-8">
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a class="hover:text-primary" href="/Home">Home</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-900 dark:text-white font-medium"><?= $product->getName() ?></span>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-7 space-y-4">
                <div
                    class="aspect-[4/3] w-full rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800 group relative cursor-zoom-in">
                    <div class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-105"
                        data-alt="Premium 34 inch curved ultra-wide gaming monitor on desk"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1tMUR9SsitDUxlrOGDxWzyDJICYhnfFqGt_2Tc2ofNwRLtz6VJIHp_OW1WzLLB6kqEicBA3WKRtwzDWaZXlESGryCrioVWq1ILCgwHiNo646Idy6JSO_I2lf7nolGgTRizOfqQCZ8NSLJScRXL9vGlIlcSZ4OZH9GJFfY9t5pnKOKrWXpNZWXRDh7UmO6vFrtzOsYb6Fh-bJk84Fv4VXvV3tLhuJkpDEZIyoNhjluuznUSDw5zkXpsIcWlPK6iYc_sj_JgQPOD-E");'>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div
                        class="aspect-square rounded-lg border-2 border-primary overflow-hidden cursor-pointer bg-slate-100 dark:bg-slate-800">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Front view of curved monitor"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD07tK8OPS6iAseWI2SDtODpJX-8yYnfJP5Os2W9pqohMesg0wcVZvj-mejkVDgbeGVbv4Kq_iZMQ5trsHlVkwOy4hRJ2SezR4YLvXtJcK2Ic13CJULVZvuSxO6QmEKjf1BMQvNPK2bFg-fuDoh1eThVd3VDQzfD_mLx9PeAGJTmm9WG8_LM1JpEw4aS-jDZrwP60TGyg1BhoXpntt4fMw1WQTb50Dm5mLeHUcYywCR_owLOAlPejQJRj73ED2eYfaHMpzF-RASSXs");'>
                        </div>
                    </div>
                    <div
                        class="aspect-square rounded-lg border border-slate-200 dark:border-slate-700 overflow-hidden cursor-pointer bg-slate-100 dark:bg-slate-800 hover:border-primary transition-colors">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Rear ports and stand view"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCaTq4l8ygEFGb5Vsch4_33zkF9XMGlWjKsmCGipUD2TaFoci5yDVCmuvJ8AyJQ7nq6zzPAz3lrB-3biTtNv75GsCmNNrvf0qBi8503034vaJSpM3IAPDm3abFd4JaxIyvywze1ra8JRssRFfX815PRuwU4zngKYQB5vwT_vPrWgEhUkBRM277De1gwTwXtP-1OOXjYjcMiYkn8toOjUNsd9LkvXJI0Jl7jcKIORUTxg46EpuoYDc0enDOb-FFpPf6B09-YNmfSsGc");'>
                        </div>
                    </div>
                    <div
                        class="aspect-square rounded-lg border border-slate-200 dark:border-slate-700 overflow-hidden cursor-pointer bg-slate-100 dark:bg-slate-800 hover:border-primary transition-colors">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Side profile showing curvature"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA7H1fY0DkSRHCiZLlET9U7wQzycRNyz_P1Y1hUo-RmStmVDjpGVrg9y4lBxwB1lYwQyvxTNpdj9BlTV6VlkXRY_YxzqeJyoXFtBeWMv4rZGWuys8nKjIcU2iw90T8id0PRCTOM61MuRZgm681x7gbPjA2_K1J2tJyAGBuBR0AIVruUeTs6ld3lWmCxZmD8AZiq7Qq_MSoJ9yHK3lSYnwV4gmgNab6H6b_UnIlzOdiYby6gfakLeu_dcjaqXR4FFKF2rH92fdzl5oE");'>
                        </div>
                    </div>
                    <div
                        class="aspect-square rounded-lg border border-slate-200 dark:border-slate-700 overflow-hidden cursor-pointer bg-slate-100 dark:bg-slate-800 hover:border-primary transition-colors">
                        <div class="w-full h-full bg-center bg-cover" data-alt="Monitor in home office setup"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDpjTuPPso6QIjteT8ZCv8KCGwmS7UlIWeT4uLUtTxCtlcrSWlqBud5Nm2UsLkRuHDn7Qdb_XT91OcxBtyV2PxxrME7fE0VV1gqt3Nuut5SFrF-AY-a2ZhUcMOLmCBeqQHSTNAEBAVlksGGEa9afdZ2TqLigFLVI1gM9OqA81WdIB5ypJPfBzqgE0evXsThDkkwerQPeLLWeVrKV5fxlWwW1F5U8h786nOByHkTROhGWn8BXh9BjGOyS0XCw4T6Ah5Cy3Q0LWT_eks");'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5 flex flex-col">
                <div class="flex flex-col gap-2 mb-4">
                    <h1 class="text-3xl font-bold leading-tight"><?= $product->getName() ?></h1>
                </div>
                <div class="mb-8 p-6 rounded-xl bg-slate-50 dark:bg-slate-900/50 border border-slate-100 dark:border-slate-800">
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-4xl font-black text-slate-900 dark:text-white">$<?= $product->getPrice() ?></span>
                        <span class="text-lg text-slate-400 line-through">$<?= $product->getPrice() ?></span>
                    </div>
                    <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold text-sm">
                        <span class="material-symbols-outlined text-sm">check_circle</span>
                        <?php if($product->getStock() > 0){echo "In Stock - Ready to Ship";}else{ echo "Out Of Stock";} ?>
                    </div>
                </div>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8"><?= $product->getDescription() ?></p>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8"><?= $product->getCategory_name() ?></p>
                <div class="flex flex-col gap-6 mt-auto">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center h-12 rounded-lg bg-slate-100 dark:bg-slate-800 p-1">
                            <a href="" class="w-10 h-full flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
                                <span class="material-symbols-outlined text-lg">remove</span>
                            </a>
                            <span class="px-4 font-bold min-w-10 text-center">1</span>
                            <a href="
                            " class="w-10 h-full flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
                                <span class="material-symbols-outlined text-lg">add</span>
                            </a>
                        </div>
                        <a href="/Product?id=<?= $product->getId() ?>&SendToCart=True"
                            class="flex-1 h-12 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined">shopping_cart</span>
                            Add to Cart
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="flex items-center gap-3 p-3 rounded-lg border border-slate-100 dark:border-slate-800">
                            <span class="material-symbols-outlined text-primary">local_shipping</span>
                            <div class="text-xs">
                                <p class="font-bold">Free Delivery</p>
                                <p class="text-slate-500">2-4 Business Days</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3 rounded-lg border border-slate-100 dark:border-slate-800">
                            <span class="material-symbols-outlined text-primary">verified_user</span>
                            <div class="text-xs">
                                <p class="font-bold">2 Year Warranty</p>
                                <p class="text-slate-500">Premium Protection</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-20 pt-12 border-t border-slate-100 dark:border-slate-800">
            <h3 class="text-2xl font-bold mb-8">Technical Specifications</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="space-y-4">
                    <div class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50">
                        <span class="text-slate-500 font-medium">Brand</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">Quantum
                            Tech</span>
                    </div>
                    <div
                        class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50 bg-slate-50/50 dark:bg-slate-900/30 px-2 rounded">
                        <span class="text-slate-500 font-medium">Model</span>
                        <span
                            class="font-semibold text-right md:text-left text-slate-900 dark:text-white">X1-34-CW</span>
                    </div>
                    <div class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50">
                        <span class="text-slate-500 font-medium">Screen Size</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">34
                            Inches</span>
                    </div>
                    <div
                        class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50 bg-slate-50/50 dark:bg-slate-900/30 px-2 rounded">
                        <span class="text-slate-500 font-medium">Resolution</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">3440 x 1440
                            (UWQHD)</span>
                    </div>
                    <div class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50">
                        <span class="text-slate-500 font-medium">Panel Type</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">OLED</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50">
                        <span class="text-slate-500 font-medium">Refresh Rate</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">175Hz</span>
                    </div>
                    <div
                        class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50 bg-slate-50/50 dark:bg-slate-900/30 px-2 rounded">
                        <span class="text-slate-500 font-medium">Response Time</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">0.03ms
                            (GtG)</span>
                    </div>
                    <div class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50">
                        <span class="text-slate-500 font-medium">Curvature</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">1800R</span>
                    </div>
                    <div
                        class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50 bg-slate-50/50 dark:bg-slate-900/30 px-2 rounded">
                        <span class="text-slate-500 font-medium">Connectivity</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">2x HDMI 2.1,
                            1x DP 1.4, USB-C</span>
                    </div>
                    <div class="grid grid-cols-2 py-3 border-b border-slate-50 dark:border-slate-800/50">
                        <span class="text-slate-500 font-medium">Weight</span>
                        <span class="font-semibold text-right md:text-left text-slate-900 dark:text-white">12.5 kg (with
                            stand)</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require "src/Views/Includes/footer.php"; ?>
<?php require __DIR__ . "/includes/header.php"; ?>
        <main class="flex flex-1 items-center justify-center p-6">
            <div
                class="w-full max-w-[480px] rounded-xl border border-[#dbe0e6] dark:border-[#2a343d] bg-white dark:bg-[#1a252f] p-8 shadow-sm">
                <div class="mb-8">
                    <h1 class="text-[#111418] dark:text-white tracking-light text-[32px] font-bold leading-tight text-center">
                        Welcome Back</h1>
                    <p class="text-[#617589] dark:text-gray-400 text-center text-base mt-2">Login to manage your
                        dashboard</p>
                </div>
                <form action="/loginProcess" class="space-y-6" method="POST">
                    <div class="flex flex-col gap-1">
                        <label class="flex flex-col">
                            <p class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Email
                                Address</p>
                            <input class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-[#3a444d] bg-white dark:bg-[#101922] h-12 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal transition-all"
                                name="email" placeholder="Enter your email" required="" type="email" />
                        </label>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="flex flex-col">
                            <div class="flex justify-between items-center pb-2">
                                <p class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal">
                                    Password
                                </p>
                            </div>
                            <input class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-[#3a444d] bg-white dark:bg-[#101922] h-12 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal transition-all"
                                name="password" placeholder="••••••••" required="" type="password" />
                        </label>
                    </div>
                    <button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal transition-colors" type="submit">
                        <span class="truncate">Sign In</span>
                    </button>
                </form>
                <div class="mt-8 border-t border-[#f0f2f4] dark:border-[#2a343d] pt-6 text-center">
                    <p class="text-[#617589] dark:text-gray-400 text-sm">
                        Don't have an account?
                        <a class="text-primary font-bold hover:underline ml-1" href="/signup">Create an account</a>
                    </p>
                </div>
            </div>
        </main>
<?php require "includes/footer.php"; ?>
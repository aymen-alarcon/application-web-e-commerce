    <?php 
        require __DIR__ . "/includes/header.php";
        $user = $_SESSION["user"]; 
    ?>
        <main class="flex-grow w-full max-w-[1280px] mx-auto px-6 md:px-20 py-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <p class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-tight">Welcome
                        back, <?= htmlspecialchars($user->getFirst_name()) . " " . htmlspecialchars($user->getLast_name())  ?></p>
                </div>
            </div>
        </main>
    <?php require "includes/footer.php"; ?>
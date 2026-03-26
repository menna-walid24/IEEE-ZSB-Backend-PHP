<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href='/' class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Home</a>
                        <a href='/about' class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">About</a>
                      
                            <?php if ($_SESSION['user'] ?? false) : ?>
                            <a href='/notes' class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Notes</a>
                        <?php endif ?>

                        <a href='/contact' class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Contact</a>
                    </div>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <div class="flex items-center space-x-4">
                            <span class="text-white text-sm">Welcome, <?= $_SESSION['user']['email'] ?></span>  
                           
                            <form method="POST" action="/session">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="rounded-md bg-red-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-500">Log Out</button>
                            </form>
                        </div>
                    <?php else : ?>
                        <div class="flex space-x-2">
                            <a href='/register' class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Register</a>
                            <a href='/login' class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Log In</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-none">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!doctype html>
<html>

<head>
    <title>KAINSTEIN | Food Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="min-h-screen bg-[#FAF7F2] font-['DM_Sans']">
    <!-- HEADER -->
    <header class="flex justify-between items-center px-8 md:px-16 py-5 bg-white border-b border-gray-200">
        <a href="main.php" class="text-2xl font-extrabold tracking-widest text-[#49352D]"> KAINSTEIN<span
                class="text-[#A66B4F]">.</span> </a>

        <!-- NAVIGATION -->
        <nav>
            <ul class="flex items-center gap-5 md:gap-10 text-sm font-semibold text-[#49352D]">
                <li>
                    <a href="#Foods" class="hover:text-[#A66B4F] transition">Foods</a>
                </li>

                <li>
                    <a href="cart.html" class="hover:text-[#A66B4F] transition"> Cart <span id="cartCount"
                            class="text-[#A66B4F]">(0)</span> </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main class="px-6 md:px-12 py-10">
        <section class="mb-10">
            <p class="uppercase tracking-[4px] text-xs font-bold text-black mb-3">Welcome to KAINSTEIN</p>

            <h1 class="font-['Playfair_Display'] text-4xl md:text-5xl text-black">Delicious food,<br />made just for
                you.</h1>

            <p class="text-gray-500 mt-4">Discover your favorites and satisfy your cravings.</p>
        </section>

        <!-- FOOD MENU -->
        <section id="Foods">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-black">Our Menu</h2>

                <p class="text-sm text-gray-400">Freshly prepared for you!</p>
            </div>

            <!-- FOOD CARDS -->
            <div id="foodList" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>

                <div class="food-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300"
                    data-name="Food 1">
                    <img src="assets/foodprev2.webp" alt="Food 1" class="w-full h-52 object-cover" />

                    <div class="p-5">
                        <h3 class="text-lg font-bold text-black">Food 1</h3>

                        <p class="text-sm text-gray-400 mt-2">A delicious meal prepared with fresh ingredients.</p>

                        <div class="flex justify-between items-center mt-5">
                            <span class="font-bold text-green-800">₱150.00</span>

                            <button onclick="addToCart('Food 1', 150)"
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm hover:bg-green-900 transition">
                                + Add
                            </button>
                        </div>
                    </div>
                </div>



                <p id="noResults" class="hidden text-center text-gray-400 py-12">No food found. Try another search.</p>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="text-center py-8 border-t border-gray-200 bg-white">
        <p class="text-sm text-gray-400">© 2026 KAINSTEIN. Made with love for food lovers.</p>
    </footer>
</body>

</html>
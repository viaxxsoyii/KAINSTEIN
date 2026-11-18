<!doctype html>
<html>

<head>
    <title>KAINSTEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="min-h-screen font-['DM_Sans']">
    <main class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <section class="relative min-h-[400px] md:min-h-screen p-5 md:p-8">
            <div class="relative h-full min-h-[400px] md:min-h-0 overflow-hidden rounded-[30px] shadow-xl">
                <img src="assets/foodprev2.webp" alt="Delicious food"
                    class="absolute inset-0 w-full h-full object-cover" />

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>

                <div class="absolute top-8 left-8">
                    <p class="text-white text-xl font-bold tracking-widest">KAINSTEIN</p>
                </div>

                <div class="absolute bottom-10 left-8 right-8 text-white">
                    <p class="uppercase tracking-[4px] text-sm mb-3 text-[#F4D6AD]">Freshly prepared for you</p>

                    <h2 class="font-['Playfair_Display'] text-4xl md:text-5xl leading-tight">Good food,<br />good mood.
                    </h2>

                    <p class="mt-4 text-white/80 text-sm">Every meal is made with love and served with care.</p>
                </div>
            </div>
        </section>

        <!-- THREE DOTS BUTTON -->
        <a href="#" id="menuButton"
            class="absolute top-8 right-10 md:right-14 lg:right-20 text-2xl font-bold text-black hover:text-gray-500 transition duration-300"
            aria-label="More options">
            &equiv;
        </a>
        <!-- POPUP -->
        <div id="popupMenu" class="hidden absolute top-20 right-10 md:right-14 lg:right-20
    w-48 bg-white border border-gray-500 rounded-xl shadow-xl
    p-4 z-50 opacity-0 scale-95 transition-all duration-300">

            <ul class="flex flex-col gap-3 text-sm font-semibold text-black">

                <li>
                    <a href="LogIn.php" class="block hover:text-green-800 transition">
                        Log In
                    </a>
                </li>

                <li>
                    <a href="#about" class="block hover:text-green-800 transition">
                        About
                    </a>
                </li>
            </ul>
        </div>


        <section class="flex flex-col justify-center px-8 md:px-14 lg:px-20 py-14">
            <div class="flex items-center gap-3 mb-6">
                <span class="w-10 h-[2px] bg-black"></span>
                <p class="uppercase tracking-[4px] text-xs font-bold text-black">Welcome!</p>
            </div>

            <h1 class="text-4xl md:text-5xl text-black font-bold leading-tight">
                How would you<br />
                like to order?
            </h1>

            <p class="text-[#927F73] mt-3 mb-12 text-base">Choose your preferred dining experience.</p>

            <!--ORDER CHOICES-->
            <div class="grid grid-cols-2 gap-4">
                <!--DINE IN-->
                <a href="main.php"
                    class="group relative flex flex-col items-start justify-between min-h-[210px] p-5 md:p-7 bg-white border border-gray-200 rounded-2xl text-left hover:bg-gray-100 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                    <span class="text-4xl group-hover:scale-110 transition-transform duration-300"> 🍽️ </span>

                    <div>
                        <h2 class="text-xl font-bold text-[#49352D] group-hover:text-black">Dine In</h2>

                        <p class="text-xs text-[#A18C7F] group-hover:text-black/70 mt-2">Enjoy your meal here.</p>
                    </div>

                    <span class="absolute top-5 right-5 text-black group-hover:text-black text-xl"> ↗ </span>
                </a>
                <!--TAKEOUT -->
                <a href="main.php"
                    class="group relative flex flex-col items-start justify-between min-h-[210px] p-5 md:p-7 bg-white border border-gray-200 rounded-2xl text-left hover:bg-gray-100 hover:-translate-y-2 hover:shadow-xl transition-all duration-300">
                    <span class="text-4xl group-hover:scale-110 transition-transform duration-300"> 🥡 </span>

                    <div>
                        <h2 class="text-xl font-bold text-[#49352D] group-hover:text-black">Take-Out</h2>

                        <p class="text-xs text-[#A18C7F] group-hover:text-black/70 mt-2">Take your favorites to go.</p>
                    </div>

                    <span class="absolute top-5 right-5 text-black group-hover:text-black text-xl"> ↗ </span>
                </a>
            </div>

            <div class="mt-12 pt-6 border-t border-[#E6D8C9] flex justify-between items-center">
                <p class="text-xs text-black-500">Made with love for food lovers.</p>

                <p class="text-xs font-semibold text-black">KAINSTEIN</p>
            </div>
        </section>
    </main>
    <script>
        const menuButton = document.getElementById("menuButton");
        const popupMenu = document.getElementById("popupMenu");

        menuButton.addEventListener("click", function (e) {
            e.preventDefault();

            if (popupMenu.classList.contains("hidden")) {
                popupMenu.classList.remove("hidden");

                requestAnimationFrame(() => {
                    popupMenu.classList.remove("opacity-0", "scale-95");
                    popupMenu.classList.add("opacity-100", "scale-100");
                });
            } else {
                popupMenu.classList.add("opacity-0", "scale-95");
                popupMenu.classList.remove("opacity-100", "scale-100");

                setTimeout(() => {
                    popupMenu.classList.add("hidden");
                }, 300);
            }
        });

        // Close when clicking outside
        document.addEventListener("click", function (e) {
            if (!menuButton.contains(e.target) &&
                !popupMenu.contains(e.target)) {

                popupMenu.classList.add("opacity-0", "scale-95");
                popupMenu.classList.remove("opacity-100", "scale-100");

                setTimeout(() => {
                    popupMenu.classList.add("hidden");
                }, 300);
            }
        });
    </script>

</body>

</html>
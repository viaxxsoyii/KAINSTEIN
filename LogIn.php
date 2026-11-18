<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAINSTEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="min-h-screen bg-[#F8F4EE] font-['DM_Sans'] flex items-center justify-center p-5">

    <main
        class="w-full max-w-5xl min-h-[600px] grid grid-cols-1 md:grid-cols-2 bg-white rounded-[30px] overflow-hidden shadow-2xl">

        <!-- LEFT -->
        <section class="relative hidden md:flex flex-col justify-between p-10 text-white overflow-hidden">
            <!-- BACKGROUND IMAGE -->
            <img src="assets/foodprev2.webp" alt="KAINSTEIN food"
                class="absolute inset-0 w-full h-full object-cover blur-[7px]" />
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10">
                <h2 class="text-2xl font-extrabold tracking-[4px]">
                    KAINSTEIN</h2>
            </div>

            <!-- INTRODUCTION -->
            <div class="relative z-10">
                <p class="uppercase tracking-[4px] text-xs text-gray-200 mb-4">
                    Employee Portal
                </p>

                <h1 class="font-['Playfair_Display'] text-5xl leading-tight">
                    Welcome<br>Back!
                </h1>

                <p class="text-white/80 mt-5 leading-relaxed">
                    Manage your restaurant operations with ease.
                    Please verify your employee information to continue.
                </p>
            </div>

            <!-- FOOTER -->
            <div class="relative z-10 border-t border-white/20 pt-5">
                <p class="text-xs text-white/70">
                    © 2026 KAINSTEIN. All rights reserved.
                </p>
            </div>
        </section>

        <!-- RIGHT -->
        <section class="flex flex-col justify-center px-7 sm:px-12 md:px-14 py-12">
            <div class="md:hidden mb-10">
                <h2 class="text-xl font-extrabold tracking-[4px] text-black">
                    KAINSTEIN</h2>
            </div>

            <div class="mb-8">
                <p class="uppercase tracking-[3px] text-xs font-bold text-black mb-3">
                    Employee Verification
                </p>

                <h1 class="font-['Playfair_Display'] text-4xl text-black">
                    Sign In
                </h1>

                <p class="text-gray-400 text-sm mt-3">
                    Enter your employee details to access your account.
                </p>

            </div>


            <!-- SELECT ROLE -->
            <div class="mb-6">

                <label class="block text-sm font-bold text-white mb-3">
                    Login As
                </label>

                <div class="grid grid-cols-2 gap-3">

                    <button type="button" id="managerBtn" onclick="selectRole('Manager')"
                        class="role-btn border border bg-green-900 text-white rounded-xl py-3 font-semibold transition">
                        Manager
                    </button>

                    <button type="button" id="staffBtn" onclick="selectRole('Staff')"
                        class="role-btn border-2 border-gray-200 text-gray-500 rounded-xl py-3 font-semibold hover:border-2 transition">
                        Staff
                    </button>

                </div>

            </div>

            <!-- ENTER DETAILS -->
            <div class="mb-5">

                <label for="employeeID" class="block text-sm font-bold text-black mb-2">
                    Employee ID
                </label>

                <input type="text" id="employeeID" placeholder="Enter your employee ID"
                    class="w-full h-12 px-4 rounded-xl border border-gray-200 outline-none text-sm focus:border-[#A66B4F] focus:ring-2 focus:ring-[#A66B4F]/10 transition">

            </div>
            <div class="mb-6">

                <label for="employeeName" class="block text-sm font-bold text-black mb-2">
                    Full Name
                </label>

                <input type="text" id="employeeName" placeholder="Enter your registered full name"
                    class="w-full h-12 px-4 rounded-xl border border-gray-200 outline-none text-sm focus:border-[#A66B4F] focus:ring-2 focus:ring-[#A66B4F]/10 transition">

            </div>

            <p id="message" class="hidden text-sm mb-4"></p>

            <button onclick="verifyEmployee()"
                class="w-full h-12 bg-green-700 text-white rounded-xl font-bold hover:bg-green-900 hover:shadow-lg transition duration-300">
                Verify & Continue →
            </button>


            <p class="text-center text-xs text-gray-400 mt-8">
                Authorized KAINSTEIN personnel only.
            </p>

        </section>

    </main>
    <script>
        // ROLE
        let selectedRole = "Manager";

        function selectRole(role) {

            selectedRole = role;

            const managerBtn = document.getElementById("managerBtn");
            const staffBtn = document.getElementById("staffBtn");

            if (role === "Manager") {

                managerBtn.className =
                    "role-btn border border-black bg-green-900 text-white rounded-xl py-3 font-semibold transition";

                staffBtn.className =
                    "role-btn border-2 border-gray-200 bg-white text-gray-500 rounded-xl py-3 font-semibold hover:border-green-900 transition";

            } else {

                staffBtn.className =
                    "role-btn border border-black bg-green-900 text-white rounded-xl py-3 font-semibold transition";

                managerBtn.className =
                    "role-btn border-2 border-gray-200 bg-white text-gray-500 rounded-xl py-3 font-semibold hover:border-green-900 transition";

            }

            document.getElementById("message").classList.add("hidden");
        }

        // SAMPLE EMPLOYEE RECORDS
        const employees = [

            {
                id: "2407IYA",
                name: "Sofhia Condao",
                role: "Manager",
                page: "manager.php"
            },

            {
                id: "STF001",
                name: "Maria Santos",
                role: "Staff",
                page: "staff.php"
            },

            {
                id: "STF002",
                name: "Pedro Reyes",
                role: "Staff",
                page: "staff.php"
            }

        ];

        // EMPLOYEE VERIFICATION
        function verifyEmployee() {

            const id = document.getElementById("employeeID").value.trim();
            const name = document.getElementById("employeeName").value.trim();
            const message = document.getElementById("message");

            if (id === "" || name === "") {

                showMessage("Please fill in all required fields.", "error");
                return;

            }

            // CHECK EMPLOYEE DETAILS
            const employee = employees.find(person =>
                person.id.toLowerCase() === id.toLowerCase() &&
                person.name.toLowerCase() === name.toLowerCase() &&
                person.role === selectedRole
            );


            if (employee) {

                showMessage("Verification successful! Welcome, " + employee.name + ".", "success");

                // SAVE EMPLOYEE INFORMATION
                sessionStorage.setItem("employeeID", employee.id);
                sessionStorage.setItem("employeeName", employee.name);
                sessionStorage.setItem("employeeRole", employee.role);

                // REDIRECT TO DASHBOARD
                setTimeout(() => {
                    window.location.href = employee.page;
                }, 1000);

            } else {

                showMessage("Invalid ID, name, or employee role. Please try again.", "error");

            }

        }

        // DISPLAY MESSAGE
        function showMessage(text, type) {

            const message = document.getElementById("message");

            message.textContent = text;
            message.classList.remove("hidden", "text-red-500", "text-green-600");

            if (type === "error") {
                message.classList.add("text-red-500");
            } else {
                message.classList.add("text-green-600");
            }

        }

    </script>

</body>

</html>
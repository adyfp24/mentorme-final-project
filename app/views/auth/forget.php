<div class='w-4/5 md:w-1/2 mx-auto p-5 mt-10 mb-10 rounded-xl shadow-xl'>
    <?php if (isset($_GET['step']) && $_GET['step'] === 'reset'): ?>
        <!-- Reset Password Section -->
        <h1 class="text-2xl font-semibold mb-4">Reset Password</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <p class="text-green-500 mb-4">Password berhasil diperbarui. Kamu bisa kembali <a href="?controller=login" class="text-blue-500">login</a>.</p>
        <?php endif; ?>
        <form action="?controller=Login&method=updatePassword" method="post">
            <input type="hidden" name="username" value="<?= $_GET['username'] ?>">
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold mb-1">New Password:</label>
                <input type="password" name="password" required class="w-full border px-3 py-2 rounded-md">
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-semibold mb-1">Confirm Password:</label>
                <input type="password" name="confirm_password" required class="w-full border px-3 py-2 rounded-md">
            </div>
            <div>
              <button type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>
                Perbarui
              </button>
            </div>
        </form>
    <?php else: ?>
        <?php if (!isset($_GET['step']) || $_GET['step'] === 'username'): ?>
            <!-- Enter Username Section -->
            <form action="?controller=Login&method=checkUsername" method="post">
                <h1 class='font-Epilogue font-semibold text-3xl'>Lupa Password Yaaa 😁</h1>
                <div class="mb-4">
                    <p class='font-Montserrat mb-2'>Username</p>
                    <input name="username" required type="text" value="" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
                </div>
                <div>
                    <button type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>
                        Lanjut
                    </button>
                </div>
            </form>

        <?php else: ?>
            <!-- Security Questions Section -->
            <form action="?controller=Login&method=checkSecurityQuestions" method="post">
                <h1 class='font-Epilogue font-semibold text-3xl'>Security Questions</h1>
                <input type="hidden" name="username" value="<?= $_GET['username'] ?>">
                <div class="mb-4">
                    <p class='font-Montserrat mb-2'>Email</p>
                    <input name="email" required value="" type="email" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
                </div>
                <div class="mb-4">
                    <p class='font-Montserrat mb-2'>No. Telp</p>
                    <input name="nomor" required value="" type="text" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
                </div>
                <div>
                    <button type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>
                        Lanjut
                    </button>
                </div>
            </form>
        <?php endif; ?>
        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <p class="text-red-500 mb-4">Username tidak ditemukan. Coba lagi.</p>
        <?php endif; ?>
    <?php endif; ?>
</div>


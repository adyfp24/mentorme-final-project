<div class=' w-1/2 mx-auto p-5 mt-10 mb-10 rounded-xl shadow-xl'>
      <form action="<?= BASEURL ?>/login/logUser" method="POST" class='container' >
        <div class='card-body'>
          <div class='card-header mb-5'>
            <h1 class='font-Epilogue font-semibold text-3xl'>Halo, Yuk login 😁</h1>
          </div>
          <div class='card-body'>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Username</p>
              <input name="username" required type="text" value="" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <div class='mb-2 flex flex-wrap justify-between'>
              <p class=''>Password</p>
              <p class='text-blue-500'>Lupa Sandi?</p>
              </div>
              <input name="password" required type="password" value="" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
          </div>
          <div class='card-footer mt-10'>
            <button type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>Login</button>
          <div class='flex justify-center p-5'>
            <p class='text-center mt-2 text-sm'>Belum Punya Akun? <Link to='/register'><a class='font-semibold text-blue-700'>Yuk Daftar!😃</a></Link></p>
          </div>
          </div>
        </div>
      </form>
</div>
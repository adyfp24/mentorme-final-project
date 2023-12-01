<div class=' w-4/5 md:w-1/2 mx-auto p-5 mt-10 mb-10 rounded-xl shadow-xl'>
      <form action="?controller=Register&method=regUser" method="POST" class='container' onSubmit={handleSubmit}>
        <div class='card-body'>
          <div class='card-header mb-5'>
            <h1 class='font-Epilogue font-semibold text-3xl'>Yuk, bikin akunmu 🤗</h1>
          </div>
          <div class='card-body'>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Username</p>
              <input name="username" required value="" type="text" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>No. Telp</p>
              <input name="nomor" required value=""  type="text" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Email</p>
              <input name="email" required value="" type="email" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Password</p>
              <input name="password" required value="" type="password" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <!-- <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Confirm Password</p>
              <input required type="password" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div> -->
          </div>
          <div class='card-footer mt-10'>
            <button type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>Register</button>
            <div class="">
            <p class='text-center mt-4 text-sm'>Sudah punya akun? <Link to='/login'><a href="?controller=Login" class='text-blue-700 font-semibold'>Yuk, login!</a></Link></p>
            </div>
          </div>
        </div>
      </form>
    </div>

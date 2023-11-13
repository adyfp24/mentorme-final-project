<div class=' w-1/2 mx-auto p-5 mt-10 mb-10 rounded-xl shadow-xl'>
      <form class='container' onSubmit={handleSubmit}>
        <div class='card-body'>
          <div class='card-header mb-5'>
            <h1 class='font-Epilogue font-semibold text-3xl'>Yuk, bikin akunmu 🤗</h1>
          </div>
          <div class='card-body'>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Username</p>
              <input required value="" type="text" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Nama Lengkap</p>
              <input required value=""  type="text" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Email</p>
              <input required value="" type="email" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Password</p>
              <input required value="" type="password" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Confirm Password</p>
              <input required type="password" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
          </div>
          <div class='card-footer mt-10'>
            <button type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>Bikin akunmu!</button>
            <div class="">
            <p class='text-center mt-2 text-sm'>Sudah punya akun? <Link to='/login'><span class='text-blue-700 font-semibold'>Yuk, login!</span></Link></p>
            </div>
          </div>
        </div>
      </form>
    </div>

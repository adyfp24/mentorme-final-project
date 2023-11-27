<div class=' w-4/5 md:w-1/2 mx-auto p-5 mt-10 mb-10 rounded-xl shadow-xl'>
      <form action="?controller=Admin&method=logAdmin" id="lg-form" method="POST" class='container' >
        <div class='card-body'>
          <div class='card-header mb-5'>
            <h1 class='font-Epilogue font-semibold text-3xl'>Login Administrator</h1>
          </div>
          <div class='card-body'>
            <div class='mb-4'>
              <p class='font-Montserrat mb-2'>Username</p>
              <input id="username_admin" name="username_admin" required type="text" value="" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
            <div class='mb-4'>
              <div class='mb-2 flex flex-wrap justify-between'>
              <p class=''>Password</p>
              </div>
              <input id="password_admin" name="password_admin" required type="password" value="" class='border w-full rounded-md px-2 h-10 border-blue-200'/>
            </div>
          </div>
          <div class='card-footer mt-10'>
            <button id="login" type='submit' class='w-full bg-blue-700 h-10 rounded-lg font-semibold text-white'>Login</button>
          </div>
        </div>
      </form>
</div>
<div id="message"></div>
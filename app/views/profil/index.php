<div>
     
      <main class="flex flex-col md:flex-row justify-center items-center md:ml-24 md:mt-0 md:mb-24 p-5">
        <?php if(isset($data['user'])):?>
        <div class="w-full md:w-1/2 md:ml-4 md:mr-4 md:mt-0 mt-2">
          <div class="md:mb-0 w-full mx-auto relative">
            <div class="pb-4 lg:px-0">
                <div>
                    <h2 class="text-2xl text-blue-700 font-semibold mb-1 mt-1">Nama</h2>
                    
                    <p class="pb-2 md:pb-6 font-semibold"><?=$data['user']['username'];?></p>
                </div>
               <div>
                    <h2 class="text-2xl text-blue-700 font-semibold mb-1 mt-1">No. Telepon</h2>
                  
                    <p class="pb-2 md:pb-6 font-semibold"><?=$data['user']['nomor']?></p>
                </div>
              <div>
                <h2 class="text-2xl text-blue-700 font-semibold mb-1 md:mt-1 mt-0">Email</h2>
                
                <h6 class="pb-2 md:pb-6 font-semibold"><?=$data['user']['email']?></h6>
              </div>
              <div>
                <h2 class="text-2xl text-blue-700 font-semibold mb-1 mt-1">Password</h2>
                
                <p class="pb-2 md:pb-6 font-semibold"><?=$data['user']['password']?></p>
              </div>
            </div>
          </div>
        </div>

        <div class=" w-full md:w-1/2 pl-2 pr-2 md:ml-4 md:mr-6 mb-6">
          <div class="w-full mt-4 m-auto max-w-screen-sm">
          <form action="?controller=Profil&method=upload" method="POST" enctype="multipart/form-data">
           <img class="w-3/5" src="assets/img/<?= $data['user']['gambar'] ?>" alt="">
           <input type="file" name="gambar" >
           <button type="submit">up</button>
          </form> 
          </div>
        </div>
        <?php endif; ?>
      </main>

    </div>

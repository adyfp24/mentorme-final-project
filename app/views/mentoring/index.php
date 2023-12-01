<div>
  
      <main class=" bg-white mt-0 pt-0">
        <div class="flex justify-center ml-4 mr-4 mt-1 mb-2">
          <h3 class=" bg-blue-50 font-semibold rounded ml-1 md:ml-2 mt-6 p-2 pl-6 pr-6 inline-block bg-contain">
            Halo <span class="text-blue-700 font-bold" ><?=$data['username'][0]?> </span>,  temukan mentor mu sekarang! 😄
          </h3>
        </div>
        <div class="container w-full pt-2 pb-8 mx-auto flex flex-wrap justify-center">
        <?php foreach($data['mentor'] as $mentor): ?>
          <div id="mentor-container" class=" lg:w-1/3 md:w-1/2  w-full p-4 px-10">
            <div class="p-8 rounded-xl border-2 bg-gray-50 border-gray-200">
              <img
                class="mb-4 shadow-md mx-auto h-25 w-full"
                alt="Use any sample image here..."
                src="https://iili.io/Jn5GmJV.jpg"
              >
               <span class="whitespace-nowrap bg-orange-400 px-3 py-1.5 text-xs text-white font-semibold">
                New
              </span> 
              <h4 class="mb-2 text-lg font-semibold mt-4">
                <?=$mentor['nama_mentor'] ?>
              </h4>
              <p class="text-base">
              <?=$mentor['judul'] ?>
              </p>
              <h3 class="mt-2 text-sm font-medium text-blue-400">
              <?=$mentor['minat_penelitian'] ?>
              </h3>

              <p class="mt-1.5 text-sm text-gray-500">
              <?=$mentor['fee'] ?>
              </p>

              <div class="mt-4 flex flex-col md:flex-row justify-center">
                <form action="?controller=Detail" method="POST">
                <input name="id_mentor" type="hidden" value="<?=$mentor['id_mentor']?>" >
                <button type="submit" class="text-white text-center w-full  rounded bg-blue-700 px-10 p-4 md:mr-3   text-sm font-semibold transition hover:scale-105 mb-3 md:mb-0">
                Detail
                </button>
                </form>
                <form action="?controller=Booking" method="POST">
                <input name="id_mentor" type="hidden" value="<?=$mentor['id_mentor']?>" >
                <button type="submit" class="text-white text-center w-full rounded bg-red-400 px-10 p-4 md:ml-2 text-sm font-semibold transition hover:scale-105">
                Booking
                </button>
                </form>
            </div>
            </div>
          </div>
        <?php endforeach ?>
        <div class="flex flex-col md:flex-row items-center justify-center mt-4">
        <form action="?controller=Mentoring&method=pagination" method="POST">
      <?php
        for ($i = 1; $i <= 11; $i++) {
          echo '<button name="' . $i . '" type="submit" value="' . $i . '" class="rounded md:px-4 px-1 md:py-2 py-1 md:mx-1 mx-1 font-semibold text-gray-700 bg-gray-200';
        
        // Tambahkan kelas khusus untuk tombol pertama (rounded-l) dan terakhir (rounded-r)
          if ($i == 1) {
              echo ' rounded-l';
          } elseif ($i == 11) {
              echo ' rounded-r';
          }

          echo ' hover:bg-red-200">' . $i . '</button>';
        }
          ?>
        </form>

      </div>
        </div>
      </main>

    </div>
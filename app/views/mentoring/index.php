<div>
  
      <main class=" dark:bg-gray-800 bg-white mt-0 pt-0">
        <div class="ml-4 mt-1 mb-2">
          <h3 class="bg-blue-50 font-semibold rounded ml-1 md:ml-2 mt-6 p-2 pl-6 pr-6 inline-block bg-contain">
            Temukan mentor Anda
          </h3>
        </div>
        <div class="container pt-2 pb-8 mx-auto flex flex-wrap justify-center">
        <?php foreach($data['mentor'] as $mentor): ?>
          <div class="lg:w-96 md:w-1/2 w-full p-4">
            <div class="p-8 rounded-xl border-2 bg-gray-50 border-gray-200">
              <img
                class="mb-4 shadow-md mx-auto h-40 w-full"
                alt="Use any sample image here..."
                src=""
              />
              {/* <span class="whitespace-nowrap bg-orange-400 px-3 py-1.5 text-xs text-white font-semibold">
                New
              </span> */}
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
                <form action="detail" method="POST">
                <input name="id_mentor" type="hidden" value="<?=$mentor['id_mentor']?>" >
                <button type="submit" class="text-white text-center w-full  rounded bg-blue-700 px-8 p-4 md:mr-4 text-sm font-semibold transition hover:scale-105 mb-3 md:mb-0">
                Detail
                </button>
                </form>
                <form action="booking" method="POST">
                <input name="id_mentor" type="hidden" value="<?=$mentor['id_mentor']?>" >
                <button type="submit" class="text-white text-center w-full rounded bg-red-400 px-8 p-4 md:ml-4 text-sm font-semibold transition hover:scale-105">
                Booking
                </button>
                </form>
            </div>
            </div>
          </div>
        <?php endforeach ?>
        </div>
      </main>

    </div>
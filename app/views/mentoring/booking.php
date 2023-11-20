<div>
     
      <main class="flex flex-col md:flex-row justify-center items-center md:mt-3 md:mb-24 p-5">
      <?php foreach($data['detail'] as $detail): ?> 
        <div class="w-full md:w-1/2 md:ml-4 md:mr-4 md:mt-4 mt-2">
          <div class="md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
              <h2 class="text-2xl md:text-4xl font-semibold mb-4 text-blue-700"><?=$detail['judul']?></h2>
              <h2 class=" text-gray-700 font-semibold "><?=$detail['nama_mentor']?></h2>
              <hr class="bg-blue-700 mr-4 md:mr-0" />
              <p class="md:py-2 py-0 text-gray-700 font-semibold justify-center"><?=$detail['fee']?></p>
            </div>
          </div>

          <div class="flex flex-col lg:flex-row lg:space-x-2">
            <div class="px-4 lg:px-0 mt-4 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
              <div>
                <h2 class="text-2xl text-blue-700 font-semibold mb-1 md:mt-1 mt-0">Tempat</h2>
                <hr class="bg-blue-700 mr-4 md:mr-0" />
                <h6 class="pb-2 md:pb-6 font-semibold">Google Meet</h6>
              </div>
              <div>
                <h2 class="text-2xl text-blue-700 font-semibold mb-1 mt-1">Waktu</h2>
                <hr class="bg-blue-700 mr-4 md:mr-0" />
                <p class="pb-2 md:pb-6 font-semibold"><?=$detail['jadwal']?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>

        <div class=" w-full md:w-1/2 pl-2 pr-2 md:ml-4 md:mr-6 mb-6">
          <div class="w-full mt-4 m-auto max-w-screen-sm">
          <form action="?controller=Booking&method=bookingMentor" method="POST">
            <div class="p-4 border-blue-700 rounded-lg shadow-xl border-2 md:border md:rounded">
              <div class="flex py-2">
                <p class="font-semibold text-gray-700 text-lg">Request Topik Mentoring</p>
              </div>
              <p class="text-gray-700 py-3">Harap melakukan request yang sesuai dengan bidang, minat, dan penelitian ilmiah yang sedang kamu jalani</p>
              <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 ">
                <div class="py-2 px-4 bg-white rounded-b-lg ">
                  <textarea
                  name="request_topik"
                  value=""
                    id="editor"
                    rows="8"
                    class="block px-0 w-full text-sm text-gray-800 bg-white border-0  focus:ring-0"
                    placeholder="Masukkan request Anda 🤗..."
                    required
                  ></textarea>
                </div>
                <input type="hidden" name="id_mentor" value="<?=$detail['id_mentor']?>">
              </div>
              <button type="submit" class="px-2 py-2 text-gray-100 bg-blue-700 hover:bg-blue-800 flex w-full items-center justify-center rounded">
                Checkout
                <i class="bx bx-user-plus ml-2"></i>
              </button>
            </div>
            </form>
          </div>
        </div>
      </main>

    </div>

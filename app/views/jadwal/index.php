<div class="">
      <div class="container bg-white p-3">
        <div class=" ml-4 mt-2 mb-3">
          <h3 class="bg-blue-50 font-semibold rounded p-2 pl-6 pr-6 inline-block bg-contain">
            Halo <span class="text-blue-700 font-bold" ><?=$data['username'][0]?> </span> , pilih mentor untuk menambahkan jadwal! 😄 
          </h3>
        </div>
        <?php foreach($data['jadwal'] as $jadwal): ?>
        <div class=" lg:w-full w-full p-4">
          <div class="flex flex-col justify-start p-5 h-auto rounded-xl border-2 bg-gray-50 border-gray-200">
            <h6 class="font-semibold mb-5 text-lg">
              <?=$jadwal['judul'] ?>
            </h6>
            <div class="md:flex ">
              <div class=" w-full p-4 mb-3 md:mr-3 rounded border-2 border-gray-200">
                <h1 class="font-semibold">Waktu :</h1>
                <?=$jadwal['jadwal'] ?>
              </div>
              <div class=" w-full p-4 mb-3 md:mr-3 rounded border-2 border-gray-200">
                <h1 class="font-semibold">Mentor : </h1>
                <?=$jadwal['nama_mentor'] ?>
              </div> 
              <div class="w-full p-4 mb-3 md:mr-3 rounded border-2 border-gray-200">
                <h1 class="font-semibold">Fee Mentoring : </h1>
                <?=$jadwal['fee'] ?>
              </div>
              <div class="md:w-1/3 h-10 md:h-20 flex justify-end ">
                <button class="bg-blue-200 hover:bg-blue-300 font-semibold p-2 rounded">
                  Tautan Zoom
                </button>
              </div>
            </div>
            <div>
                <?=$jadwal['request_topik']?>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
  </div>
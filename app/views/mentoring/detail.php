<div>
     
      <main class="w-full mb-28">
        <div class="flex w-full py-5">
          <h2 class="text-3xl md:text-4xl md:mt-6 md:mb-6 mx-auto font-semibold text-gray-800 leading-tight">Detail Mentor 👨‍💻</h2>
        </div>
        <div class="w-4/5 mx-auto p-5 border rounded-lg shadow-xl border-blue-500 transition-transform hover:transform transition-ease-in-out hover:shadow-2xl">
        <?php foreach($data['detail'] as $detail): ?>  
        <div class="">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 leading-tight">🙋🏻‍♂️ <?=$detail['nama_mentor']?></h2>
            <div class="w-full flex transition-transform transition-ease-in-out hover:transform hover:scale-[101%]">
              <p class="bg-blue-700 rounded-md p-2 text-white"><?=$detail['deskripsi']?></p>
            </div>
          </div>
          <div>
            <h2 class="text-2xl my-5 font-semibold text-gray-800 leading-tight ">🤝 Spesialisasi Keilmuwan</h2>
            <div class="w-full flex">
              <p class="bg-blue-700 hover:transform hover:scale-[102%] transition-transform transition-ease-in-out rounded-md p-2 text-white"><?=$detail['spesialisasi']?></p>
            </div>
          </div>
          <div>
            <h2 class="text-2xl my-5 font-semibold text-gray-800 leading-tight">💶 Fee Mentoring</h2>
            <div class="w-full flex">
              <p class="bg-blue-700 rounded-md p-2 text-white hover:transform hover:scale-[102%] transition-transform transition-ease-in-out"><?=$detail['fee']?></p>
            </div>
          </div>
          <div>
            <h2 class="text-2xl my-5 font-semibold text-gray-800 leading-tight">🎓 Pendidikan</h2>
            <div class="w-full flex">
              <p class="bg-blue-700 hover:transform hover:scale-[102%] transition-transform transition-ease-in-out rounded-md p-2 text-white"><?=$detail['pendidikan']?></p>
            </div>
          </div>
          <div>
            <h2 class="text-2xl my-5 font-semibold text-gray-800 leading-tight">📝 Hasil Penelitian</h2>
            <div class="w-full flex">
              <p class="bg-blue-700 hover:transform hover:scale-[102%] transition-transform transition-ease-in-out rounded-md p-2 text-white"><?=$detail['hasil_penelitian']?></p>
            </div>
          </div>
          <div>
            <h2 class="text-2xl my-5 font-semibold text-gray-800 leading-tight">🎖 Sertifikasi</h2>
            <div class="w-full flex">
              <p class="bg-blue-700 hover:transform hover:scale-[102%] transition-transform transition-ease-in-out rounded-md p-2 text-white"><?=$detail['sertifikasi']?></p>
            </div>
          </div>
          <div class="pt-6 flex justify-end">
          <a href="?controller=Mentoring" class="px-2 py-2 text-gray-100 bg-blue-400 hover:bg-blue-600 flex w-1/6 items-center justify-center rounded">
                kembali
                <i class="bx bx-user-plus ml-2"></i>
        </a>
          </div>
        </div>
        <?php endforeach ?>
      </main>

    </div>

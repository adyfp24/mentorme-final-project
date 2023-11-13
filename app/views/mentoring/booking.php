<div>
     
      <main class="flex flex-col md:flex-row justify-center items-center md:mt-3 md:mb-24 p-5">
        <div class="md:w-1/2 ml-4 mt-4">
          <div class="md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
              <h2 class="text-4xl font-semibold mb-4 text-blue-700">{ReadData.judulmentoring}</h2>
              <h2 class="text-2xl font-semibold text-blue-700">{ReadData.namamentor}</h2>
              <hr class="bg-blue-700" />
              <p class="py-2 text-xl text-blue-700 font-semibold justify-center">Rp {ReadData.fee}</p>
            </div>
          </div>

          <div class="flex flex-col lg:flex-row lg:space-x-2">
            <div class="px-4 lg:px-0 mt-4 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
              <div>
                <h2 class="text-2xl text-blue-700 font-semibold mb-1 mt-1">Tempat</h2>
                <hr class="bg-blue-700" />
                <p class="pb-6 text-blue-700 font-semibold">{ReadData.tempat}</p>
              </div>
              <div>
                <h2 class="text-2xl text-blue-700 font-semibold mb-1 mt-1">Waktu</h2>
                <hr class="bg-blue-700" />
                <p class="pb-6 text-blue-700 font-semibold">{ReadData.jadwal}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="md:w-1/2 ml-4 mr-6">
          <div class="w-full lg:w-1/4 mt-4 m-auto max-w-screen-sm">
            <div class="p-4 border-blue-700 rounded-lg shadow-xl border-2 md:border md:rounded">
              <div class="flex py-2">
                <p class="font-semibold text-gray-700 text-lg">Request Topik Mentoring</p>
              </div>
              <p class="text-gray-700 py-3">Harap melakukan request yang sesuai dengan bidang, minat, dan penelitian ilmiah yang sedang kamu jalani</p>
              <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 ">
                <div class="py-2 px-4 bg-white rounded-b-lg ">
                  <textarea
                  value={request}
                  onChange={e => requestchange(e.target.value)}
                    id="editor"
                    rows="8"
                    class="block px-0 w-full text-sm text-gray-800 bg-white border-0  focus:ring-0"
                    placeholder="Masukkan request Anda 🤗..."
                    required
                  ></textarea>
                </div>
              </div>
              <button onClick={handleSubmit} type="submit" class="px-2 py-2 text-gray-100 bg-blue-700 hover:bg-blue-800 flex w-full items-center justify-center rounded">
                Checkout
                <i class="bx bx-user-plus ml-2"></i>
              </button>
            </div>
          </div>
        </div>
      </main>

    </div>

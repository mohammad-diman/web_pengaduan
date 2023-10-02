@include('master.app')
@include('master.layouts.header')
{{-- @yield('content') --}}

<section class="lg:pt-[29vh] pt-[23vh] h-[100vh]">
    <img src="{{ asset('image/foto_kantor.jpg') }}" class="w-full top-0 absolute -z-10 blur-sm" alt="">
    <div class="grid max-w-screen-lg px-4 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
        <div class="text-center col-span-12">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight md:text-4xl lg:text-5xl text-white dark:text-white">
                SELAMAT DATANG DI WEBSITE PENGADUAN</h1>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class="max-w-screen-xl px-6 py-8 mx-auto lg:py-24 lg:px-6">
        <div class="w-full lg:-mt-70 -mt-[200px] h-auto p-4 bg-white border rounded-lg shadow-md sm:p-8">
            <div class="w-full bg-blue-600 rounded-md text-white p-4 mb-5">
                <h1 class="text-xl font-semibold">Sampaikan Laporan Anda</h1>
            </div>
            <form method="POST" action="/dashboard" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="text"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan nama anda" required value="{{ old('nama') }}">
                </div>

                <div class="mb-6">
                    <label for="text"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                    <input type="text" id="judul" name="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan judul laporan anda" required value="{{ old('judul') }}">
                </div>

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                    Laporan</label>
                <textarea id="pesan" name="pesan" rows="4" 
                    class="mb-5 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan isi laporan anda..." required value="{{ old('isi') }}"></textarea>

                <div class="mb-6">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                        Tanggal
                        Kejadian</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required value="{{ old('tanggal') }}">
                </div>

                <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                        Kejadian</label>
                    <input type="text" name="lokasi" id="lokasi" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan lokasi kejadian" required value="{{ old('lokasi') }}">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        Lampiran</label>
                    <input 
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mb-"
                        aria-describedby="file_input_help" id="file_input" name="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                        GIF
                        (MAX. 800x400px).</p>
                        @error('file_input')
                            {{ $message }}
                        @enderror
                </div>

                <div class="flex flex-row justify-end mt-5">


                    <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Submit</button>
                </div>
            </form>
        </div>

    </div>
</section>


@include('master.layouts.footer')
@include('master.layouts.end-body')


@extends('master.auth-main')

@section('content')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul laporan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Isi laporan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal kejadian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lokasi kejadian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        lampiran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $p)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $p->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $p->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->pesan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->tanggal }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->lokasi }}
                        </td>
                        <td class="px-6 py-4">
                            <a class="text-blue-500 font-semibold" href="{{ asset('storage/' . $p->file_input) }}"
                                target="_blank">Lihat</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="/dashboard/{{ $p->id }}" method="POST">
                                @csrf
                                @method('put')
                                <button class=" text-blue-500 font-semibold">Confirm</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

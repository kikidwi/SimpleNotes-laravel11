<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>My notes</title>
</head>
<body class="container mx-auto px-2 py-2 flex flex-col items-center">
    <header>
        <div>
            <h1 class="text-4xl font-bold text-left">
                My notes
            </h1>
        </div>
    </header>
    <div>
        <div class="flex flex-row">
            <div class=" mt-2 border-2 border-black rounded-lg w-44 h-auto">
                <div class="p-2">
                    <h2 class="text-3x1 font-bold">Lists</h2>
                </div>
                @foreach ($notes as $dataNote)
                    <div class="border-2 border-black rounded-lg p-1 max-w-50 m-1 overflow-hidden hover:bg-[#D9D9D9] flex flex-row place-content-between">
                        <p class="text-2x1 font-medium text-center">{{$dataNote->judul}}</p>
                        <div >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            <form id="deleteForm" action="{{ route('delete', $dataNote->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="showModalButton" data-modal-target="modalDelete" data-modal-toggle="modalDelete" style="background: none; border: none; padding: 0;">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                                <x-alertDelete></x-alertDelete>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container ml-2">
                <form id="saveForm" action="{{url('insertData')}}" method="post">
                    @csrf
                    <div class="flex flex-row">
                        <div class="col-span-full mr-2">
                            <div class="mt-2">
                                <input type="text" name="judulNotes"  class="border-2 border-black rounded-md w-[650px] pl-2">
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" id="showModalButton" data-modal-target="modalSave" data-modal-toggle="modalSave" class="rounded-md bg-white px-[110px] py-3 text-sm font-semibold text-gray-900 shadow-sm ring-2 ring-inset ring-black hover:bg-[#D9D9D9]">SAVE</button>
                        </div>
                        <x-alertSave></x-alertSave>
                    </div>
                    <div class="col-span-full">
                        <div class="mt-2">
                        <textarea id="about" name="isiNotes" rows="3" class="block rounded-md border-2 border-black w-[914px] pl-2 h-auto"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

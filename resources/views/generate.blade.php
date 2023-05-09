<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Generate QR Code</title>
<script src="http://cdn.tailwindcss.com"></script>
<!-- import do Tailwind -->
</head>
<body>

<!-- Div que centraliza o formulário e o QR Code -->
<div class="w-screen h-screen flex justify-center items-center flex-col">
  <!-- Formulário para a alteração dos dados sobre o John -->
  
    <h1 class="mb-10 font-bold text-5xl">Virtual Card Generator</h1>
    <form action="{{route('generate.update')}}" method="POST" class="mb-10">
      @csrf
      <div class="mb-6 w-96">

        <div class="relative rounded-md shadow-sm mb-2">
          <label for="nome" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <input type="text" value='{{ $john->nome }}' name="nome" id="nome" class="focus:scale-105 ease-out duration-300 block w-full rounded-md border-0 py-1.5 pl-3 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
        </div>

        
        <div class="relative mt-4 rounded-md shadow-sm mb-2">
          <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">Linkedin URL</label>
          <input type="text" value="{{ $john->linkedin }}" name="linkedin" id="linkedin" class="focus:scale-105 ease-out duration-300 block w-full rounded-md border-0 py-1.5 pl-3 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
        </div>

        
        <div class="relative mt-4 rounded-md shadow-sm mb-10">
          <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">GitHub URL</label>
          <input type="text" value="{{ $john->github }}" name="github" id="github" class="focus:scale-105 ease-out duration-300 block w-full rounded-md border-0 py-1.5 pl-3 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
        </div>

        <button type="submit" class="hover:scale-125 ease-out duration-300 flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Generate
        </button>
      </div>
    </form>


  @if ($qrcode == 'ok')
    @include('qrcode')
  @endif

</div>
</body>
</html>


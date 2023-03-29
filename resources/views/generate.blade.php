<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Generate QR Code</title>
<script src="http://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Div que centraliza o formulário e o QR Code -->
<div class="w-screen h-screen flex justify-center items-center flex-col">
  <!-- Formulário para a alteração dos dados sobre o John -->
  
    <h1 class="mb-8 font-bold text-5xl sm:visible invisible">Virtual Card Generator</h1>
    <form action="{{route('generate.update')}}" method="POST" class="mb-6 sm:visible invisible">
      @csrf
      <div class="mb-6 w-96">
        <label for="nome" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <div class="relative mt-2 rounded-md shadow-sm mb-2">
          <input type="text" value='{{ $john->nome }}' name="nome" id="nome" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

        <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">Linkedin URL</label>
        <div class="relative mt-2 rounded-md shadow-sm mb-2">
          <input type="text" value="{{ $john->linkedin }}" name="linkedin" id="linkedin" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

        <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">GitHub URL</label>
        <div class="relative mt-2 rounded-md shadow-sm mb-8">
          <input type="text" value="{{ $john->github }}" name="github" id="github" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

        <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
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


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <script src="http://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="w-screen h-screen flex justify-center items-center flex flex-col">

<form action="">
  <div class="mb-6">
    <label for="nome" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
    <div class="relative mt-2 rounded-md shadow-sm mb-2">
      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <span class="text-gray-500 sm:text-sm"></span>
      </div>
      <input type="text" name="nome" id="nome" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">Linkedin URL</label>
    <div class="relative mt-2 rounded-md shadow-sm mb-2">
      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <span class="text-gray-500 sm:text-sm"></span>
      </div>
      <input type="text" name="linkedin" id="linkedin" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">GitHub URL</label>
    <div class="relative mt-2 rounded-md shadow-sm mb-6">
      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <span class="text-gray-500 sm:text-sm"></span>
      </div>
      <input type="text" name="linkedin" id="linkedin" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <div class="mt-6">
      <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        </span>
        Generate Image
      </button>
    </div>

  </div>
</form>
  
  <div class="visible-print text-center">
    {!! QrCode::size(200)->generate(route('john')); !!}
  </div>

</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>John Page</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Card de apresentação do John -->
    <div class="w-screen h-screen flex justify-center items-center flex-col">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg ">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Hi, my name is {{ $john->nome }} </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Here you can find more about me!</p>
            </div>

            <div class="border-t border-gray-200 flex flex-col justify-center items-center">
                <div class="mb-4 mt-4 flex flex-row justify-center items-center gap-8">
                    <h1 class="font-medium text-gray-500 text-center">Name:</h1>
                    <h1 class="text-center rounded-md  px-3.5 py-1.5 font-semibold" style="margin-right:5px;">{{ $john->nome }}</h1>
                </div>
                <div class="mb-4 flex flex-row justify-center items-center gap-8">
                    <h1 class="font-medium text-gray-500 text-center">Linkedin:</h1>
                    <a href="{{ $john->linkedin }}" class="text-center rounded-md bg-indigo-600 px-3.5 py-1.5 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Linkedin</a>
                </div>
                <div class="mb-6 flex flex-row justify-center items-center gap-8">
                    <h1 class="font-medium text-gray-500 text-center">Github:</h1>
                    <a href="{{ $john->github }}" class="text-center rounded-md bg-indigo-600 px-3.5 py-1.5 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">GitHub</a>
                </div>
            
            </div>
        </div>
    </div>

</body>
</html>
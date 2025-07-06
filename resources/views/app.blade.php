  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire Poll</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles 
  </head>

  <body class="container mx-auto mt-10 mb-10 max-w-lg flex flex-col gap-10">

    <div>
      <h2 class="text-xl font-semibold mb-5">Create Poll</h2>
      <livewire:create-poll/>
    </div>

    <div>
      <h2 class="text-xl font-semibold mb-5">Available Polls</h2>
      <livewire:available-polls/>
    </div>

    @livewireScripts

  </body>

  </html>
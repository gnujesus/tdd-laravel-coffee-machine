<x-layout>
  <div class="flex flex-col gap-5">
    <div>
      <h2 class="text-3xl text-center">Here's your cappucino. Thanks for choosing us!</h2>
    </div>

    <div class="flex flex-col items-center gap-5">
      <div class="text-center">
      <h3 class="text-xl font-bold">Data about your cup</h3>
      <p><strong>Amount of sugar:</strong> {{$cup->amountOfSugar ?? 'none'}}</p>
      <p><strong>Content of your cup:</strong> {{$cup->content->flavor?? 'dunno'}}</p>
      <p><strong>Type of your cup:</strong> {{$cup->type ?? 'none'}}</p>

      </div>
      <div>
      <a href="{{route('select-cup')}}"><button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-lg font-medium tracking-wide text-white transition hover:bg-[#0f0f0f] text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">Buy a coffee <3</button></a>
      </div>
    </div>

    {{count($log->smallCups)}}
    {{count($log->largeCups)}}
    {{count($log->mediumCups)}}
  </div>
</x-layout>
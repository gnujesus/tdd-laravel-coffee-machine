<x-layout>
  <div class="flex flex-col items-center gap-5">
    <h3 class="text-3xl">Oh no!</h3>
    <p class="text-lg">It looks like {{$errorMessage ?? 'something has ocurred'}}! :(</p>
    <a href="{{route('select-cup')}}"><button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-lg font-medium tracking-wide text-white transition hover:bg-[#0f0f0f] text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">Buy a coffee <3</button></a>
  </div>
</x-layout>
<x-layout title="Select Cup Size">
    <div class="container flex flex-col gap-5">
      <div class="">
        <h2 class="text-center text-3xl">Select your cup size</h2>
      </div>
        <form action="{{ route('select-sugar') }}" method="GET" class="flex gap-5 justify-center">
          <button type="submit" name="cup_size" value="small" class="cursor-pointer whitespace-nowrap bg-transparent rounded-md border border-red-500 px-4 py-2 text-lg font-medium tracking-wide text-red-500 transition hover:bg-red-500 hover:text-white text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-500 dark:text-red-500 dark:focus-visible:outline-red-500">3oz Cup</button>
          <button type="submit" name="cup_size" value="medium" class="cursor-pointer whitespace-nowrap bg-transparent rounded-md border border-red-500 px-4 py-2 text-lg font-medium tracking-wide text-red-500 transition hover:bg-red-500 hover:text-white text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-500 dark:text-red-500 dark:focus-visible:outline-red-500">5oz Cup</button>
          <button type="submit" name="cup_size" value="large" class="cursor-pointer whitespace-nowrap bg-transparent rounded-md border border-red-500 px-4 py-2 text-lg font-medium tracking-wide text-red-500 transition hover:bg-red-500 hover:text-white text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-red-500 dark:text-red-500 dark:focus-visible:outline-red-500">7oz Cup</button>
        </form>
    </div>
</x-layout>

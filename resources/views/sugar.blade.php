<x-layout title="Select Sugar Amount">
    <div class="container flex flex-col gap-10">
        <h2 class="text-center text-3xl">How much sugar do you want?</h2>
        <form action="{{ route('submit-order') }}" method="POST" class="flex flex-col gap-2 items-center">
            @csrf
            <input type="hidden" name="cup_size" value="{{ $cup_size }}">

            <div class="flex w-full max-w-xs flex-col gap-1 text-black">
              <label for="textInputDefault" class="w-fit pl-0.5 text-md">Amount</label>
              <input id="textInputDefault" type="number" name="sugar_amount" min="0" max="10" step="1" required class="w-full rounded-md border bg-white px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75" name="name" placeholder="Enter the amount of sugar" autocomplete="name"/>
              <div class="flex justify-end">
                <button type="submit" class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:bg-[#0f0f0f] text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">Order</button>
              </div>
            </div>

        </form>
    </div>
</x-layout>

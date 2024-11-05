<div>
     <h1 class="text-center mt-14 font-extrabold text-2xl">Counter App</h1>

       <div class="text-center mt-6 mx-auto space-x-4">
          <button wire:click="down" class="bg-red-500 px-4 py text-4xl">-</button>
          <span class="text-4xl">{{$Count}}</span>
          <button wire:click="up" class="bg-green-500 px-4 text-4xl">+</button>
       </div>
</div>

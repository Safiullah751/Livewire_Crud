<div>
    <div class="flex">
        <div class="flex mt-10 items-center justify-center w-1/2">
            <form  wire:submit='{{$selected_id ? 'update' : 'submit'}}'>
                <div class="shadow-2xl rounded-2xl">
                    <div class="text-center mt-10 p-6 space-x-6 ">
                        <label for="">Name</label>
                        <input class=" border border-black rounded-md px-8 py-2" type="text" wire:model='name'>
                    </div>
                    @error('name')
                    <span class="text-red-500 text-center mx-48 ">{{$message}}</span>
               @enderror
                <div class="text-center  p-6 space-x-6 ">
                   <label for="">Email</label>
                   <input class=" border border-black rounded-md px-8 py-2" type="text" wire:model='email'>
                </div>
                    @error('email')
                        <span class="text-red-500 text-center mx-48 ">{{$message}}</span>
                    @enderror
                     <div class="text-center p-6 space-x-6 ">
                        <label for="" class="text-bold">Message</label>
                         <textarea class="border border-black rounded-md px-8 py-2" name="" id="" cols="23" rows="5" wire:model='message'></textarea>
                        </div>
                        @error('message')
                        <span class="text-red-500 mx-48">{{$message}}</span>
                   @enderror
                    <div class="text-center ml-14 p-6 space-x-6 ">
                        <button  class="shadow-lg bg-green-500 px-14 py-2 rounded-full">{{$selected_id ? 'Update' : 'Submit'}}</button>
                    </div>
                </div>
            </form>
        </div>
           <div class="flex w-1/2 mt-16 rounded-2xl items-center mx-24  md:flex-row-reverse">
            <table class="min-w-full divide-y divide-gray-200 shadow-lg rounded-2xl">
                <tr class="border border-gray-300">
                  <th  scope="col" class="px-6 py-3">ID</th>
                  <th scope="col" class="px-6 py-3" >Name</th>
                  <th scope="col" class="px-6 py-3">Email</th>
                  <th scope="col" class="px-6 py-3">Message</th>
                  <th scope="col" class="px-6 py-3">Actions</th>

                </tr>
                @foreach ($Forms as $form)
                        <div wire:click='{{$form->id}}'>
                      <tr class="border border-gray-300">
                          <td scope="col" class="px-11 py-3 whitespace-nowrap ">{{$form->id}}</td>
                          <td scope="col" class="px-11 py-3">{{$form->name}}</td>
                          <td scope="col" class="px-11 py-3">{{$form->email}}</td>
                          <td scope="col" class="px-11 py-3">{{$form->message}}</td>
                          <td class="flex space-x-3 px-3 mt-2">
                            <button wire:click='delete({{$form->id}})' class="bg-red-500 px-4 rounded-full text-center ">Delete</button>
                            <button wire:click='edit({{$form->id}})' class="bg-green-500 px-6 rounded-full text-center ">Edit</button>

                        </td>
                      </tr>
                    </div>
                @endforeach
             </table>
           </div>
    </div>

</div>

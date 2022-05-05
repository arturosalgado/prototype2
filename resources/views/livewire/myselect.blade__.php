<div>
   <table style="width: 200px">
       <tr>
           <td >
                <input type="checkbox">
           </td>
           <td>
               <select >
               @foreach($records as $record)
                   <option {!! $record->id !!}>{!! $record->name !!}</option>
               @endforeach
               </select>
           </td>
       </tr>
   </table>
</div>

{{--<div class="mt-4">
    

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3"></div>
            <label class="md:w-2/3 block text-gray-500 font-bold">
            <input class="mr-2 leading-tight" type="checkbox"  wire:model="checkBrands">
            <span class="text-sm">
                Activar / Desactivar
            </span>
            </label>
        </div>  
        
        <div class="inline-block relative w-64">
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" {{ ($checkBrands) ? '' : 'disabled'}} wire:model="selectedBrands">
                <option value="0" selected>Todos los brans</option>
                <option value="1" selected>Telcel</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>

<div>--}}
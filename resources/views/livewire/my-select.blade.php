<div>
   <table style="width: 400px">
       <tr>
           <td >
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                <input class="mr-2 leading-tight" type="checkbox" type="checkbox"  wire:model="checkeado" wire:model="name">
                <span class="text-sm">
                    Activar / Desactivar 
                </span>
                </label>
            </div>  
           </td>
           <td>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" {{ ($checkeado) ? '' : 'disabled'}}>
                    <option value="0" selected>All</option>
                    @foreach($records as $record)
                        <option {!! $record->id !!}>{!! $record->name !!}</option>
                    @endforeach
                </select>
           </td>
       </tr>
   </table>
</div>
<div>
       
    <!-- component -->
    <div class="sm:px-6 w-full">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="px-4 md:px-10 py-4 md:py-7">
            
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <div class="mt-7 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr>
                            <th>Countries</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($countriesTable as $country)
                            
                        
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td>
                                    <div class="ml-5">
                                        {{ $country['country'] }}
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
        
</div>
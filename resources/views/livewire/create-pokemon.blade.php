<div class="flex-1 flex h-full flex-col">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="flex gap-5 flex-1 p-10 relative max-h-full"> 
        <div class="flex flex-col relative gap-5 flex-1 max-h-screen w-1/2">
            <h1 class="text-3xl font-semibold">Liste des Pokemons</h1>
            <div class="flex flex-col gap-5 overflow-y-auto">
                @for ($i = 0; $i < 10; $i++)
                    <div class="flex gap-2 rounded-lg cursor-pointer group hover:bg-slate-100 transition-all duration-300 p-1 px-5" title="">
                        <img src="/352.png" class=" h-28 w-28 bg-slate-200 group-hover:bg-slate-100 group-hover:border-0 transition-all duration-300 rounded-lg" alt="" srcset="">
                        <div class="flex flex-col justify-center gap-4">
                            <h3 class="font-semibold">Pokemon {{$i+1}}</h3>
                            <div class="grid grid-cols-4 gap-4">
                                <div class="flex gap-4 items-center font-thin italic">
                                    <img src="/heart.png" class="h-8" alt="" srcset="">
                                    10
                                </div>
                                <div class="flex gap-4 items-center font-thin italic">
                                    <img src="/weight.png" class="h-8" alt="" srcset="">
                                    10
                                </div>
                                <div class="flex gap-4 items-center font-thin italic">
                                    <img src="/height.png" class="h-8" alt="" srcset="">
                                    10
                                </div>
                                <div class="flex gap-4 items-center font-thin italic">
                                    <img src="/type.png" class="h-8" alt="" srcset="">
                                    10
                                </div>
                            </div>
                            {{-- <p class="line-clamp-1">
                            </p> --}}
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="flex flex-col gap-5 flex-1 bg-slate-200 overflow-y-auto">
            <h1 class="text-3xl font-semibold">Liste des Pokemons</h1>
            <div class="flex gap-2 cursor-pointer hover:bg-slate-100 transition-all duration-300 p-1" title="">
                
            </div>
        </div>
    </div>
</div>

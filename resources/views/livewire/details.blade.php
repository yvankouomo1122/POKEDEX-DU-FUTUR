<div
    class="md:container md:px-10 lg:px-0 mx-auto relative min-h-screen flex flex-col pb-24 md:items-center md:justify-center">
    <div
        class="rounded-xl md:shadow-2xl md:flex-row flex-col md:drop-shadow-xl border flex gap-5 relative md:h-[500px] w-full lg:w-3/5">
        <div class="md:w-1/2 md:inline hidden rounded-l-xl bg-cover bg-no-repeat bg-center bg-slate-200"
            style="background-image: url('{{ asset('sta/' . $pok->image) }}');">
        </div>
        <img src="sta/{{$pok->image}}" class="md:hidden bg-slate-200 md:rounded-t-xl" alt="" srcset="">
        <div class="p-5 flex-1 relative flex flex-col">
            <h1 class="text-5xl font-semibold ">{{ $pok->name }}</h1>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <div class="flex gap-4 items-center font-thin italic">
                    <img src="/heart.png" class="h-8" alt="" srcset="">
                    {{ $pok->hp }}
                </div>
                <div class="flex gap-4 items-center font-thin italic">
                    <img src="/weight.png" class="h-8" alt="" srcset="">
                    {{ $pok->weight }}
                </div>
                <div class="flex gap-4 items-center font-thin italic">
                    <img src="/height.png" class="h-8" alt="" srcset="">
                    {{ $pok->height }}
                </div>
                <div class="flex gap-4 items-center font-thin italic">
                    <img src="/type.png" class="h-8" alt="" srcset="">
                    {{ $pok->name }}
                </div>
            </div>
            <div class="flex flex-col flex-1 gap-4 mt-10 overflow-y-auto">
                <h2 class="text-3xl font-semibold italic">Attaques:</h2>
                <div class="grid grid-cols-1 gap-2 border-separate">
                    <div class="flex gap-2 cursor-pointer hover:bg-slate-100 transition-all duration-300 p-1"
                        title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.">
                        <img src="/352.png" class="border h-16 w-16 bg-slate-200" alt="" srcset="">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-semibold">Attaque 1</h3>
                            <p class="line-clamp-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker
                                including
                                versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2 cursor-pointer hover:bg-slate-100 transition-all duration-300 p-1"
                        title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.">
                        <img src="/352.png" class="border h-16 w-16 bg-slate-200" alt="" srcset="">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-semibold">Attaque 2</h3>
                            <p class="line-clamp-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker
                                including
                                versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2 cursor-pointer hover:bg-slate-100 transition-all duration-300 p-1"
                        title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.">
                        <img src="/352.png" class="border h-16 w-16 bg-slate-200" alt="" srcset="">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-semibold">Attaque 3</h3>
                            <p class="line-clamp-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only
                                five
                                centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker
                                including
                                versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

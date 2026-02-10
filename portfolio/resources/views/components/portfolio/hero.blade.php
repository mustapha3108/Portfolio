<div class="min-h-screen flex gap-4 justify-center items-center flex-col lg:flex-row">
    <div class="flex flex-col gap-5 w-full lg:w-1/2">
        <h1 class="satisfyfont text-4xl lg:text-5xl tracking-in-expand">Mustapha</h1>
        <h1 class="satisfyfont text-4xl lg:text-5xl text-gray-400 tracking-in-expand">Belmouloud</h1>

        <h2 class="text-sm md:text-md lg:text-lg text-neutral max-w-full fade-in-fwd1">
            <span class="text-rotate duration-6000 max-w-full">
                <span class="justify-items-start max-w-full">
                    <span class="bg-primary px-1 max-w-full">Développeur Web Full Stack</span>
                    <span class="bg-accent px-1 max-w-full">Ingénieur en Réseaux Informatiques</span>
                </span>
            </span>
        </h2>

        <div class="h-1 underline-animation"></div>

        <p class="flicker-1 text-accent text-lg">Actuellement disponible</p>
        <div class="flex justify-around  items-center max-w-full">
            <image src="{{asset('portfolio-pics/social.png')}}" class="size-12 rounded-full noef combo1" />
            <image src="{{asset('portfolio-pics/linkedin.png')}}" class="size-12 rounded-full noef combo2" />
            <image src="{{asset('portfolio-pics/message.png')}}" class="size-12 rounded-full noef combo3" />
            <image src="{{asset('portfolio-pics/telephone.png')}}" class="size-12 rounded-full noef combo4" />
        </div>
    </div>
    <div class="w-full lg:w-1/2 flex flex-col gap-3">
        <h1 class="text-primary">i design, build high performance full stack web apps and deploy them with my networking knowledge </h1>
        <h1 class="text-primary">Open to both networking and web dev oppertunities </h1>
        <div>
            <h1 class="text-secondary">My Default web stack</h1>
            <div class="flex justify-around gap-5 flex-wrap-reverse mt-4">
                <div class="text-white flex-1 text-center rounded-md bg-linear-to-b from-transparent to-accent px-2 py-1" >Astro</div>
                <div class="text-white flex-1 text-center rounded-md bg-linear-to-b from-transparent to-accent px-2 py-1" >Alpine</div>
                <div class="text-white flex-1 text-center rounded-md bg-linear-to-b from-transparent to-accent px-2 py-1" >Tailwind</div>
                <div class="text-white flex-1 text-center rounded-md bg-linear-to-b from-transparent to-accent px-2 py-1" >Livewire</div>
                <div class="text-white flex-1 text-center rounded-md bg-linear-to-b from-transparent to-accent px-2 py-1" >Laravel</div>
            </div>
        </div>

       
        <div class="flex justify-evenly gap-2 mt-6">
            <button class="btn btn-neutral rounded-md flex justify-center gap-2 flex-1 py-6 btn-sm">
                <x-codicon-github class="size-8 rounded-full" />
                peojects and scripts
            </button>
            <button class="btn bg-gray-900 rounded-md flex justify-center gap-2 flex-1 py-6 btn-sm ">
                <x-pepicon-cv class="size-8 rounded-full" />
                some stupid resume thing
            </button>
        </div>
    </div>

</div>



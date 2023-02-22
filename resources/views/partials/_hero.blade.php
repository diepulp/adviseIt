<section
class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
<div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    
></div>

<div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-red-300">
        Advise<span class="text-black">It</span>
    </h1>

    @auth
    <p class="text-2xl text-black-200 font-bold my-4">
        Create New Advising Plan
    </p>
    <div>
        <a
            href="/plans/new-plan"
            class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Create New</a
        >
    </div>
    @else
    <p class="text-2xl text-black-200 font-bold my-4">
    </p>
    <div>
        <a
            href="/login"
            class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Login to Create new Plan</a
        >
    </div>
    @endauth
</div>
</section>
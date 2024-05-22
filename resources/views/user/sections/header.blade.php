    <section>
        <div class="flex justify-between items-center bg-blue-950 text-blue-200 py-3 px-3">
            <div class="flex justify-between items-center">
               <div>
                 <img src="{{ Storage::url('front/logo-light.png') }}" alt="Logo" class=" w-2/12 md:w-4/6 mx-auto">
               </div>
               <div> <a href=""> <i class="fa-solid fa-bars"></i> </a></div>
            </div>
            <div>
                {{ auth()->user()->name }}
            </div>

        </div>
    </section>
      <div class=" w-[12%] min-h-screen bg-blue-950 text-blue-200 space-y-4 px-6">
            <a href="" class="block">Dashboard</a>

            <form action="{{ route('logout') }}" method="POST">
                  @csrf
            <button type="submit"> Logout</button>
            </form>
           
        </div>
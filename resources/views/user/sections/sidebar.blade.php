      <div class=" w-[12%] min-h-screen bg-blue-950 text-blue-200 space-y-4 px-6">
          <a href="{{ route('dashboard') }}" class="block"> <i class="fa-solid fa-gauge"></i> Dashboard</a>
          <a href="{{ route('book.list') }}" class="block"> <i class="fa-solid fa-book"></i> Books</a>
          <a href="{{ route('book.add') }}" class="block"> <i class="fa-solid fa-book-bookmark"></i> Add  Book</a>

            <a href="{{ route('book.add') }}" class="block"> <i class="fa-solid fa-book-open"></i> View  Book</a>

          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit"> Logout</button>
          </form>

      </div>

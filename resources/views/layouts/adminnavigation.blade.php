        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Restuarant Mnagement System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
                <a href="{{ view('admin.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.create') }}">New Category</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}">View All Categories</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.menus.create') }}">New Menu</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.menus.index') }}">View All Menus </a>
            </li>
          </ul>
        </div>
      </nav>
      <a href="{{ route('admin.categories.create') }}">New Category</a>
      <a href="{{ route('admin.categories.index') }}">View All Categories</a>
      <a href="{{ route('admin.menus.create') }}">New Menu</a>
      <a href="{{ route('admin.menus.index') }}">View All Menus </a>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="user/assets/index.html">
            <img src="user/assets/images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
        </a>

        <form onsubmit="return handleSearch(event)" class="custom-form search-form flex-fill me-3" role="search">
            <div class="input-group input-group-lg">
                <input name="search" 
                       type="search" 
                       class="form-control" 
                       id="searchInput" 
                       placeholder="Search products..."
                       aria-label="Search">

                <button type="submit" class="form-control" id="submit">
                    <i class="bi-search"></i>
                </button>
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i>
                            Welcome, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="bi bi-person me-2"></i>My Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('user.orders') }}">
                                    <i class="bi bi-bag me-2"></i>My Orders
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.browse') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="user/assets/about.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="user/assets/contact.html">Contact</a>
                </li>

               
            </ul>

            <div class="ms-4">
                @auth
                    {{-- <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn custom-btn custom-border-btn smoothscroll">Logout</button>
                    </form> --}}
                @else
                    <a href="{{ route('login') }}" class="btn custom-btn custom-border-btn smoothscroll">Log In</a>
                    <a href="{{ route('register') }}" class="btn custom-btn custom-border-btn smoothscroll">Sign Up</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Add this script at the bottom of your navbar or in a separate JS file -->
<script>
function handleSearch(event) {
    event.preventDefault();
    
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const products = document.querySelectorAll('.custom-block');
    let found = false;

    products.forEach(product => {
        const title = product.querySelector('h5')?.textContent.toLowerCase() || '';
        const description = product.querySelector('p')?.textContent.toLowerCase() || '';
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            product.style.display = 'block';
            found = true;
        } else {
            product.style.display = 'none';
        }
    });

    // Show/hide no results message
    const noResults = document.getElementById('noResults');
    if (!found && !noResults) {
        const message = document.createElement('div');
        message.id = 'noResults';
        message.className = 'alert alert-info text-center mt-4';
        message.textContent = 'No products found matching your search.';
        document.querySelector('.section-padding').appendChild(message);
    } else if (found && noResults) {
        noResults.remove();
    }

    return false;
}

// Add live search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    if (this.value.length >= 2) { // Only search if 2 or more characters
        handleSearch(e);
    } else if (this.value.length === 0) {
        // Show all products when search is cleared
        document.querySelectorAll('.custom-block').forEach(product => {
            product.style.display = 'block';
        });
        const noResults = document.getElementById('noResults');
        if (noResults) noResults.remove();
    }
});
</script>

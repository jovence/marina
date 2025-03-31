<section class="profile-section section-padding">
    <div class="container">
        <div class="row mb-6">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="section-title">My Profile</h2>
                    <a href="{{ route('products.browse') }}" class="btn custom-btn">
                        <i class="bi bi-house-door me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h4 class="card-title mb-0">Profile Information</h4>
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h4 class="card-title mb-0">Update Password</h4>
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card shadow-sm border-danger">
                    <div class="card-header bg-danger text-white">
                        <h4 class="card-title mb-0">Delete Account</h4>
                    </div>
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .profile-section {
    background-color: #f9f9f9; /* Very light gray */
    min-height: 100vh;
    padding: 4rem 0;
}

.container {
    max-width: 1140px;
    margin: 0 auto;
}

.section-title {
    color: #333; /* Dark gray */
    font-size: 2.5rem;
    font-weight: 600;
    margin-bottom: 2rem;
    text-align: center;
}

.d-flex.justify-content-between.align-items-center {
    justify-content: center;
    flex-direction: column;
    gap: 1rem;
}

.card {
    background-color: white;
    border: 1px solid #e0e0e0; /* Light gray border */
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
    margin-bottom: 2rem;
}

.card:hover {
    transform: translateY(-3px);
}

.card-header {
    background-color: #f0f0f0; /* Lighter gray */
    padding: 1.5rem;
    border-bottom: 1px solid #e0e0e0;
}

.card-title {
    color: #333;
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 0;
}

.card-body {
    padding: 2rem;
}

.custom-btn {
    background-color: #007bff; /* Blue */
    color: white;
    border-radius: 6px;
    padding: 0.8rem 2rem;
    font-weight: 500;
    transition: background-color 0.3s, transform 0.2s;
}

.custom-btn:hover {
    background-color: #0056b3; /* Darker blue */
    transform: translateY(-2px);
}

.border-danger {
    border-color: #dc3545; /* Red */
}

.bg-danger {
    background-color: #dc3545;
}

.text-white {
    color: white;
}

.bi-house-door {
    font-size: 1.2rem;
}

@media (min-width: 768px) {
    .d-flex.justify-content-between.align-items-center {
        flex-direction: row;
        justify-content: space-between;
    }
}
</style>
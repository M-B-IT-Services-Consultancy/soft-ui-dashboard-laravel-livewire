<footer class="footer pb-4">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-left">
                    © {{ now()->year }}
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link text-muted">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link text-muted"
                            >About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link text-muted">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('terms')}}" class="nav-link pe-0 text-muted">Terms of use</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('privacy-policy')}}" class="nav-link pe-0 text-muted">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

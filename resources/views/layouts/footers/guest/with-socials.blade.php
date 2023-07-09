  <footer class="footer pb-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-4 mx-auto text-center">
                  <a href="{{ route('home') }}" target="_blank"
                      class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      Home
                  </a>
                  <a href="{{ route('about') }}" target="_blank"
                      class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      About Us
                  </a>
                  <a href="{{ route('contact') }}" target="_blank"
                      class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      Contact Us
                  </a>
                  <a href="{{ route('privacy-policy') }}" target="_blank"
                      class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      Privacy Policy
                  </a>
                  <a href="{{ route('terms') }}" target="_blank"
                      class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                      Terms
                  </a>
              </div>
              <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                  <a href="https://www.facebook.com/profile.php?id=100094499823651" target="_blank" class="text-secondary me-xl-4 me-4">
                      <span class="text-lg fab fa-facebook"></span>
                  </a>
                  <a href="https://www.instagram.com/dodgyoneuk/" target="_blank"
                      class="text-secondary me-xl-4 me-4">
                      <span class="text-lg fab fa-instagram"></span>
                  </a>
              </div>
          </div>
          <div class="row">
              <div class="col-8 mx-auto text-center mt-1">
                  <p class="mb-0 text-secondary">
                      Copyright © {{ now()->year }}
              </div>
              </p>
          </div>
      </div>
      </div>
  </footer>

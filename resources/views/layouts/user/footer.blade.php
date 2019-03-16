<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <a href="https://twitter.com/Michaelovo">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://web.facebook.com/mikeovo1">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>

          <li class="list-inline-item">
            <a href="https://www.instagram.com/emikeovo/?hl=en">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://linkedin.com/in/michael-emma-025278123">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse text-white"></i>
              </span>
            </a>
          </li>
        </ul>
        <p class="copyright text-muted" style="colour:white;">Copyright &copy; 2014-{{carbon\carbon::now()->year}} Knowledge Hub.
        All rights reserved.
      </p>

      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('user/js/clean-blog.min.js')}}"></script>

@section('footer')
  @show

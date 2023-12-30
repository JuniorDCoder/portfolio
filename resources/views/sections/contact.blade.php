<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>ENS Street, Bambili, Bamenda</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
                <a href="https://x.com/D_Coderr" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/moffor.juniorpraise" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/juniordcoder" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/juniordcoder" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>juniorngu@traitz.tech</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+237 677 802 114</p>
          </div>
        </div>
      </div>

      <form class="php-email-form mt-4" action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          {{-- <div class="loading">Loading</div> --}}
            @if (session('error'))
                <div class="alert alert-danger error-message">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success sent-message">
                    {{ session('success') }}
                </div>

            @endif
            @if (session('scrollTo'))
                <script>
                    document.getElementById('{{ session('scrollTo') }}').scrollIntoView();
                </script>
            @endif
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section>

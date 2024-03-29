<section id="appointment" class="appointment section-bg">
  <div class="container">
    <form action="submit" method="post" class="php-email-form">
      @csrf
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 form-group mt-3">
          <input type="date" name="appointmentDate" class="form-control datepicker" id="appointmentDate" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="department" id="department" class="form-select">
            <option value="">Select Department</option>
            <option value="Psikiater">Psikiater</option>
            <option value="Psikolog">Psikolog</option>
          </select>
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group mt-3">
          <select name="doctor" id="doctor" class="form-select">
            <option value="">Select Doctor</option>
            <option value="Whet Phaartz">Whet Phaartz</option>
            <option value="Chris P. Bacon">Chris P. Bacon</option>
            <option value="Hana Utako">Hana Utako</option>
            <option value="Hyeon Dae Hi">Hyeon Dae Hi</option>
          </select>
          <div class="validate"></div>
        </div>
      </div>

      <div class="form-group mt-3">
        <div class="title">How are you doing</div>
        <textarea class="form-control" name="message" rows="5" placeholder="Plese write here, tell us how are you doing"></textarea>
        <div class="validate"></div>
      </div>
      <div class="form-group mt-3">
        <div class="title">Is there anything you want to talk about</div>
        <textarea class="form-control" name="message" rows="5" placeholder="Plese write all the things you might want to tell us"></textarea>
        <div class="validate"></div>
      </div>
      <div class="form-group mt-3">
        <div class="title">From 1-10, how much is your stress level lately?</div>
        <textarea class="form-control" name="message" rows="5" placeholder="Describe your stress level to us"></textarea>
        <div class="validate"></div>
      </div>
      <div class="form-group mt-3">
        <div class="title">Have you been eating and sleeping?</div>
        <textarea class="form-control" name="message" rows="5" placeholder="Tell us about your recent eating and sleeping habit"></textarea>
        <div class="validate"></div>
      </div>
      
      <div class="mb-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Make an Appointment</button></div>
    </form>
  </div>
</form>
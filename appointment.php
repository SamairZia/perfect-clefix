<?php include 'inc/header.php' ?>

<main>
  <section class="inner-sec-1">
    <div class="container">
      <h2>Appointment</h2>
    </div>
    <div class="about-get-quote-inner">
      <img src="images/support.png" class="img-fluid" alt="">
      <div>
        <p>Get a Free Quote Today!</p>
        <a href="tel:00971565499011">+971 565499011</a>
      </div>
    </div>
  </section>

  <div class="container appointment-form-wrapper">
    <div class="row justify-content-center">
      <div class="col-sm-8 col-lg-8 text-center">
        <div class="card px-0">
          <form id="msform" class="appointment-form">
            <!-- progressbar -->
            <ul id="progressbar" class="progressbar">
              <li class="active" id="account"><strong>Details</strong></li>
              <li id="personal"><strong>Services</strong></li>
              <li id="payment"><strong>Frequency</strong></li>
              <li id="confirm"><strong>Finish</strong></li>
            </ul>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div> <br> <!-- fieldsets -->
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Personal Details:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Step 1 - 4</h2>
                  </div>
                </div>
                <label class="fieldlabels">Name:</label>
                <input class="fieldinput" type="text" name="uname" placeholder="Name" />
                <label class="fieldlabels">Phone:</label>
                <input class="fieldinput" type="tel" name="phonr" placeholder="Phone" pattern="[0-9]+" />
                <label class="fieldlabels">Address:</label>
                <input class="fieldinput" type="text" name="address" placeholder="Address" />
                <label class="fieldlabels">Area:</label>
                <input class="fieldinput" type="text" name="area" placeholder="Area" />
                <label class="fieldlabels">Building Name:</label>
                <input class="fieldinput" type="text" name="building" placeholder="Building Name" />
                <label class="fieldlabels">Flat Number:</label>
                <input class="fieldinput" type="text" name="flat" placeholder="Flat Number" />
              </div>
              <button type="button" name="next" class="next action-button">Next</button>
            </fieldset>
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Services:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Step 2 - 4</h2>
                  </div>
                </div>

                <label class="fieldlabels">Number of Cleaners?</label>
                <select class="fieldinput">
                  <option>-- Select --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>

                <label class="fieldlabels">How many hours do you need your professional to stay?</label>
                <select class="fieldinput">
                  <option>-- Select --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>

                <label class="fieldlabels">Time:</label>
                <input class="fieldinput" type="time">

                <label class="fieldlabels">Do you require cleaning materials?</label>
                <select class="fieldinput">
                  <option>-- Select --</option>
                  <option value="no">No, I have them</option>
                  <option value="yes">Yes, please</option>
                </select>

              </div>
              <button type="button" name="next" class="next action-button">Next</button>
              <button type="button" name="previous" class="previous action-button-previous">Go Back</button>
            </fieldset>
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Frequency:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Step 3 - 4</h2>
                  </div>
                </div>

                <label class="fieldlabels mb-2">How often do you need your professional?</label>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="frequency" id="daily">
                  <label class="form-check-label" for="daily">
                    Daily
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="frequency" id="once">
                  <label class="form-check-label" for="once">
                    Once Only
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="frequency" id="weekly">
                  <label class="form-check-label" for="weekly">
                    Weekly
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="frequency" id="biweekly">
                  <label class="form-check-label" for="biweekly">
                    Bi-weekly
                  </label>
                </div>

                <!-- open on selecting above radio buttons -->
                <div class="for-daily mt-3">
                  <label class="fieldlabels">From:</label>
                  <input class="fieldinput" type="date">
                  <label class="fieldlabels">To:</label>
                  <input class="fieldinput" type="date">
                </div>

                <!-- For once only -->
                <div class="for-once-only mt-3">
                  <label class="fieldlabels">From:</label>
                  <input class="fieldinput" type="date">
                </div>

                <!-- For Weekly -->
                <div class="for-weekly mt-3">
                  <label class="fieldlabels">Which day of the week?</label>
                  <select class="fieldinput">
                    <option>-- Select --</option>
                    <option value="mon">Monday</option>
                    <option value="tue">Tuesday</option>
                    <option value="wed">Wednesday</option>
                    <option value="thurs">Thursday</option>
                    <option value="fri">Friday</option>
                    <option value="sat">Saturday</option>
                    <option value="sun">Sunday</option>
                  </select>
                </div>

                <!-- For Bi-weekly -->
                <div class="for-biweekly mt-3">
                  <label class="fieldlabels mb-2">How many days of the week?</label>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkMon">
                    <label class="form-check-label" for="checkMon">
                      Monday
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkTues">
                    <label class="form-check-label" for="checkTues">
                      Tuesday
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkWed">
                    <label class="form-check-label" for="checkWed">
                      Wednesday
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkThurs">
                    <label class="form-check-label" for="checkThurs">
                      Thursday
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkFri">
                    <label class="form-check-label" for="checkFri">
                      Friday
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkSat">
                    <label class="form-check-label" for="checkSat">
                      Saturday
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkSun">
                    <label class="form-check-label" for="checkSun">
                      Sunday
                    </label>
                  </div>

                </div>

              </div>
              <button type="button" name="next" class="next action-button">Submit</button>
              <button type="button" name="previous" class="previous action-button-previous">Go Back</button>
            </fieldset>
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Finish:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Step 4 - 4</h2>
                  </div>
                </div> <br><br>
                <h2 class="success-text text-center"><strong>SUCCESS !</strong></h2> <br>
                <div class="row justify-content-center">
                  <div class="col-3"> <img src="images/tick.png" class="fit-image"> </div>
                </div> <br><br>
                <div class="row justify-content-center">
                  <div class="col-7 text-center">
                    <h5 class="success-text text-center">You have successfully booked your appointment!</h5>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="side-card">

          <div class="single-block">
            <h4>SERVICE DETAILS</h4>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Frequency</h6>
              <p>One-time</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Duration</h6>
              <p>2 hours</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Number of Professionals</h6>
              <p>3</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Material</h6>
              <p>Yes</p>
            </div>
          </div>

          <div class="single-block">
            <h4>DATE & TIME</h4>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Date</h6>
              <p>Friday, February 18</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Start Time</h6>
              <p>08:30-09:00</p>
            </div>
          </div>

          <div class="single-block">
            <h4>ADDRESS</h4>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Address</h6>
              <p>Somewhere on earth</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Area</h6>
              <p>Anywhere</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Building Name</h6>
              <p>Anywhere</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Flat Name</h6>
              <p>Anywhere</p>
            </div>
          </div>

          <div class="single-block">
            <h4>PRICE DETAILS</h4>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Price</h6>
              <p>AED 83.81</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>VAT</h6>
              <p>AED 4.19</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap">
              <h6>Total</h6>
              <p><strong>AED 88.00</strong></p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

</main>

<?php include 'inc/footer.php' ?>
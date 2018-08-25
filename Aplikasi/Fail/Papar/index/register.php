 <!--CONTACT US AREA-->
    <section class="contact-area relative padding-100-50" id="contact">
        <div class="area-bg"></div>
        <div class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-7 col-lg-offset-7 col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="contact-form mb50 wow fadeIn">
                            <h2>Register</h2>
                            <form action="<?php echo URL . 'register/username' ?>" method="POST">
                                <div class="form-group" id="username-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-name" name="users[0][pengguna]" placeholder="Username..." required>
                                    </div>
                                </div>
                                <div class="form-group" id="email-field">
                                    <div class="form-input">
                                        <input type="email" class="form-control" id="form-email" name="users[0][email]" placeholder="Email.." required>
                                    </div>
                                </div>
                                <div class="form-group" id="password-field">
                                    <div class="form-input">
                                        <input type="password" class="form-control" id="form-phone" name="users[0][katalaluan1]" placeholder="Password...">
                                    </div>
                                </div>
								 <div class="form-group" id="password-field">
                                    <div class="form-input">
                                        <input type="password" class="form-control" id="form-phone" name="users[0][katalaluan2]" placeholder="Re-enter Password...">
                                    </div>
                                </div>
								<div class="form-group" id="phone-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-phone" name="users[0][notelefon]" placeholder="Phone number...">
                                    </div>
                                </div
                                
                                <div class="form-group" >
									<input type="submit" class="form-control" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->
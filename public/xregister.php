<?php
require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';
?>

<?php view('header', ['title' => 'Registration Form']) ?>

<section id="contact" class="contact-section contact-style-3 img-bg" style="background-image: url('../../assets/img/hero/hero-5/hero-bg.svg')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                        <div class="section-title text-center mb-50">
                            <br>
                            <h3 class="mb-15">&lt;&sol;WebApp Registration Form&gt;</h3>
                            <p>Please fill the following form to create an account.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="section-title text-center mb-50">
                            <img src="./img/registerImg.png" width="60%" alt="Register" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-form-wrapper" style="padding: 20px; border-radius: 10px; border: 4px solid #6466aa; background-color: rgba(235, 194, 110, 0.5);">
                            <form action="register.php" method="post">
                                <div class="row">                                    
                                    <div class="col-md-12">
                                        <label for="username">Username:</label>
                                        <div class="single-input">
                                            <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>" 
                                                class="form-input" placeholder="Enter your new username here.">
                                                <small class="<?= error_class($errors, 'username') ?>"><?= $errors['username'] ?? '' ?></small>                                            
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email">Email:</label>
                                        <div class="single-input">
                                            <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
                                                class="form-input" placeholder="Enter a valid email address here.">
                                                <small class="<?= error_class($errors, 'email') ?>"><?= $errors['email'] ?? '' ?></small>                                        
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password">Password:</label>
                                        <div class="single-input">
                                            <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
                                                class="form-input" placeholder="Enter your new password here.">
                                                <small class="<?= error_class($errors, 'password') ?>"><?= $errors['password'] ?? '' ?></small>                                            
                                            <i class="lni lni-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password2">Re-type Password:</label>
                                        <div class="single-input">
                                            <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>"
                                                class="form-input" placeholder="Re-Type your password here.">
                                                <small class="<?= error_class($errors, 'password2') ?>"><?= $errors['password2'] ?? '' ?></small>                                            
                                            <i class="lni lni-lock"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="agree">
                                            <input type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /> I agree with the
                                                <a href="#" title="term of services">term of services</a>
                                        </label><br>
                                        <small class="<?= error_class($errors, 'agree') ?>"><?= $errors['agree'] ?? '' ?></small>
                                    </div>
                                    <div class="col-md-12">
                                        <label>&nbsp;</label>
                                        <div class="form-button">
                                            <button type="submit" class="button"><i class="lni lni-enter"></i>Register</button>
                                        </div>
                                    </div>
                                </div>
                                <footer>Already a member? <a href="login.php">Login here</a></footer>
                            </form>
                        </div>    
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>
            </div>
        </section>

<?php view('footer') ?>

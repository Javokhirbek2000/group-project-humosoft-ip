<div class="modal fade" id="auth-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
                <li class="nav-item w-50" role="presentation">
                    <button class="nav-link active w-100 text-uppercase fw-bold" id="signin-tab" data-bs-toggle="tab" data-bs-target="#signin" type="button" role="tab" aria-controls="home" aria-selected="true">Sign In</button>
                </li>
                <li class="nav-item w-50" role="presentation">
                    <button class="nav-link w-100 text-uppercase fw-bold" id="signuptab-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="profile" aria-selected="false">Sign Up</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                    <div class="modal-header">
                        <h5 class="modal-title fs-1" id="exampleModalLabel">Welcome Back</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label mb-1">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" >
                                <div id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label mb-1">Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password">
                            </div>
                            <div class="mb-3 forgot-password">
                                <a href="#" class="text-">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary  w-100 py-2">SIGN IN</button>
                        </form>
                    </div>
                    <div class="d-flex align-items-center px-3">
                        <div class="w-50 border-top"></div>
                        <div class="mx-2">or</div>
                        <div class="w-50 border-top"></div>
                    </div>
                    <div class="modal-footer flex-column">
                        <button type="button" class="btn btn-outline-primary w-100 py-2"><i class="bi bi-google me-3"></i> Continue with Google</button>
                        <button type="button" class="btn btn-outline-primary w-100 py-2"><i class="bi bi-telegram me-3"></i>Continue with Telegram</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <div class="modal-header">
                        <h5 class="modal-title fs-1" id="exampleModalLabel">Create Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label mb-1">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Full Name" >
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label mb-1">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" >
                                <div id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label mb-1">Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label mb-1">Re-enter password</label>
                                <input type="password" class="form-control" placeholder="Re-enter password" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">CREATE ACCOUNT</button>
                            <p class="text-muted fs-12px " >By creating an account, you agree to Humosoft's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice.</a></p>
                        </form>
                    </div>
                    <div class="d-flex align-items-center px-3">
                        <div class="w-50 border-top"></div>
                        <div class="mx-2">or</div>
                        <div class="w-50 border-top"></div>
                    </div>
                    <div class="modal-footer flex-column">
                        <button type="button" class="btn btn-outline-primary w-100 py-2"><i class="bi bi-google me-3"></i> Continue with Google</button>
                        <button type="button" class="btn btn-outline-primary w-100 py-2"><i class="bi bi-telegram me-3"></i>Continue with Telegram</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

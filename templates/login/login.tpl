{extends file='page/base.tpl'}

{block name="title"}Login{/block}

{block name="content"}
    <div class="container py-5">
        <div class="logincontent">
            <div class="d-flex justify-content-center">
                <img src="/assets/img/logo1.png" class="text-center" height="250" width="250" alt="logo">
            </div>
            <h1 class="bbtitle">Login</h1>
            <div class="container text-center">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="signinemail">Email address</label>
                            <div class="d-flex justify-content-center">
                                <input type="email" id="signinemail" class="form-control signinfield" placeholder="Email Address"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="signinpass">Password</label>
                            <div class="d-flex justify-content-center">
                                <input type="password" id="signinpass" class="form-control signinfield" placeholder="Password"/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" id="signinbtn">Sign In</button>
                        <button type="submit" class="btn btn-primary btn-lg" id="createacctbtn">Create Account</button>
                    </form>
            </div>
        </div>
    </div>
{/block}

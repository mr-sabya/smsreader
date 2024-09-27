<div class="login-card card-block">
    <form class="md-float-material" wire:submit.prevent="login">
        <div class="text-center">
            <img src="assets/images/logo-black.png" alt="logo">
        </div>
        <h3 class="text-center txt-primary">
            Sign In to your account
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="md-input-wrapper">
                    <input type="email" class="md-form-control" required="required" wire:model.live.debounce.1000ms="email" />
                    <label>Email</label>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    @if (session()->has('error'))<small class="text-danger">{{ session('error') }}</small> @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="md-input-wrapper">
                    <input type="password" class="md-form-control" required="required" wire:model.live.debounce.500ms="password" />
                    <label>Password</label>
                    @error('password') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                    <label class="input-checkbox checkbox-primary">
                        <input type="checkbox" id="checkbox" wire:model.live.debounce.500ms="remember">
                        <span class="checkbox"></span>
                    </label>
                    <div class="captions">Remember Me</div>

                </div>
            </div>
            <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                <a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 offset-xs-1">
                <button type="submit"
                    class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
            </div>
        </div>


        <!-- </div> -->
    </form>
    <!-- end of form -->
</div>
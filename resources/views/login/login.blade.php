@extends('../layout/login')

@section('head')
<title>Login - SKO</title>
@endsection

@section('content')
<div class="flex flex-col md:flex-row min-h-screen">
    <!-- Left Section -->
    <div class="flex-1 bg-cover bg-center relative" style="background-image: url('dist/img/loginuser.png');">
        <div class="absolute inset-0 bg-[#FFF3B2] opacity-25"></div>
        <div class="relative z-10 flex items-center justify-center h-full p-8">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold bodycopy">Berkarya dengan gaya</h1>
                <h2 class="logosko text-7xl font-bold mt-2">SKO<span class="bodycopy text-4xl mt-10 font-bold">
                        selalu tersedia</span></h2>
            </div>
        </div>
    </div>
    <!-- Right Section -->
    <div class="flex-1 flex items-center justify-center p-8 bg-white">
        <div class="w-full max-w-md">
            <h2 class="text-2xl font-bold text-center ">Welcome to SKO!</h2>
            <h3 class="text-md font-normal text-center mb-8">Log in Account</h3>
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-black">Email</label>
                    <input type="email" id="email"
                        class="login__input form-control mt-1 block w-full px-3 py-6 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Enter your email">
                </div>
                <div>
                    <label for="password"
                        class="login__input form-control block text-sm font-medium text-black">Password</label>
                    <input type="password" id="password"
                        class="mt-1 block w-full px-3 py-6 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Enter your password">
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Forgot
                        password?</a>
                </div>
                <div class="flex justify-center">
                    <button id="btn-login"
                        class="w-3/4 py-5 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-gray-700 bg-[#FFF3B5] hover:bg-gray-700 hover:text-[#FFF3B5] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign
                        in</button>
                </div>
                <div class="text-center">
                    <p class="text-sm text-black">Are you new? <a href="/register"
                            class="font-medium text-indigo-600 hover:text-indigo-500">Create an account</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    (function() {
        async function login() {
            // Reset state
            $('#login-form').find('.login__input').removeClass('border-danger')
            $('#login-form').find('.login__input-error').html('')

            // Post form
            let email = $('#email').val()
            let password = $('#password').val()

            // Loading state
            $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>')
            tailwind.svgLoader()
            await helper.delay(1500)

            axios.post(`login`, {
                email: email,
                password: password
            }).then(res => {
                location.href = '/'
            }).catch(err => {
                $('#btn-login').html('Login')
                if (err.response.data.message != 'Wrong email or password.') {
                    for (const [key, val] of Object.entries(err.response.data.errors)) {
                        $(`#${key}`).addClass('border-danger')
                        $(`#error-${key}`).html(val)
                    }
                } else {
                    $(`#password`).addClass('border-danger')
                    $(`#error-password`).html(err.response.data.message)
                }
            })
        }

        $('#login-form').on('keyup', function(e) {
            if (e.keyCode === 13) {
                login()
            }
        })

        $('#btn-login').on('click', function() {
            login()
        })
    })()
</script>
@endsection
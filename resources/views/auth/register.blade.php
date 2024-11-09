<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div class ="flex flex-col justify-center items-center w-80 mx-auto h-[80vh] bg-slate-400">
        <div class="mb-7">
            <p>Selamat Datang</p>
            <div class="flex flex-col justify-center items-center w-80 mx-auto h-[80vh]">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
            
                    <div class="flex flex-col mb-5">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                        @error('name')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
            
                    <div class="flex flex-col mb-5">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                        @error('username')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
            
                    <div class="flex flex-col mb-5">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        @error('password')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
            
                </form>
            
            </div>
            
        </div>
    </div>
</body>
</html>
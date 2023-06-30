@include('partials.__header')
<x-navbar />
<header class="max-w-lg mx-auto my-24">
    <h1 class="text-4xl font-bold text-black text-center">Admin Register</h1>
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl "> welcome to Student System</h3>
        <p class="text-gray pt-2"> Sign in to your account</p>
    </section>
    <section class="mt-10">
        <form action="/store" method="POST" class="flex flex-col">
            @csrf
            {{-- csrf protection --}}
            <div class="mb-6 py-2 rounded bg-gray-200 items-center">
                <label for="text" class=" text-gray-700 text-sm flex items-center justify-start p-3">Name</label>
                <input type="text" name="name" class="bg-gray-200 p-2 border-b-4 w-full focus:outline-none">
            </div>
            <div class="mb-6 py-2 rounded bg-gray-200 items-center">
                <label for="email" class=" text-gray-700 text-sm flex items-center justify-start p-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 p-2 border-b-4 w-full focus:outline-none">
            </div>
            <div class="mb-6 py-2 rounded bg-gray-200 items-center">
                <label for="password"
                    class=" text-gray-700 text-sm flex items-center justify-start p-3">Password</label>
                <input type="password" name="password" class="bg-gray-200 px-2 border-b-4 w-full focus:outline-none">
            </div>
            <div class="mb-6 py-2 rounded bg-gray-200 items-center">
                <label for="password_confirmation"
                    class=" text-gray-700 text-sm flex items-center justify-start p-3">Confirm
                    Password</label>
                <input type="password" name="password_confirmation"
                    class="bg-gray-200 px-2 border-b-4 w-full focus:outline-none">
            </div>
            <button
                class="bg-purple-950 hover:bg-purple-700 text-white font-bold py-4 rounded shadow-lg hover:shadow-xl transiton duration-200"
                type="submit">
                SignUp
            </button>
        </form>
    </section>
</main>

@include('partials.__footer')

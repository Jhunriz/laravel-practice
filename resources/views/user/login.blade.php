@include('partials.__header')
<x-navbar />
<header class="max-w-lg mx-auto mt-24">
    <h1 class="text-4xl font-bold text-black text-center">Student Login</h1>

    {{-- {{ $title }} we can call out data at AppserviceProvider --}}
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl "> welcome to Student System</h3>
        <p class="text-gray pt-2"> Sign in to your account</p>
    </section>
    <section class="mt-10">
        <form action="" class="flex flex-col">
            <div class="mb-6 py-2 rounded bg-gray-200 items-center">
                <label for="email" class=" text-gray-700 text-sm flex items-center justify-start p-3">Email</label>
                <input type="email" class="bg-gray-200 p-2 w-full  focus:outline-none">
            </div>
            <div class="mb-6 py-2 rounded bg-gray-200 items-center">
                <label for="password"
                    class=" text-gray-700 text-sm flex items-center justify-start p-3">Password</label>
                <input type="password" class="bg-gray-200 px-2 w-full outline-none border-none">
            </div>
            <button
                class="bg-purple-950 hover:bg-purple-700 text-white font-bold py-4 rounded shadow-lg hover:shadow-xl transiton duration-200"
                type="submit">
                login
            </button>
        </form>
    </section>
</main>

@include('partials.__footer')

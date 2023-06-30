@include('partials.__header')
<x-navbar />
<header class="max-w-lg mx-auto mt-24">
    <h1 class="text-4xl font-bold text-black text-center">{{ $title }}</h1>
</header>
<main class="bg-white max-w-4xl mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <div class="overflow-x-auto w-full relative">
            <table class="w-96 mx-auto text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            First Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Last Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Age
                        </th>
                    </tr>
                </thead>
                @foreach ($students as $student)
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="py-4 px-6">
                                {{ $student['id'] }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $student['first_name'] }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $student['last_name'] }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $student['email'] }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $student['age'] }}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>






    {{-- 
<ul>
    @foreach ($students as $student)
        <li>{{$student['first_name']}}  </li>
        <li>{{$student['last_name']}}</li>
        <li>{{$student['age']}}</li>
    @endforeach
    @foreach ($students as $student)
        <div class="p-10">
            <p>{{ $student->first_name }}</p>
            <p>{{ $student->age }}</p>
            <p>{{ $student->email }}</p> 




        </div>
        <li>{{$student->gender_count}}</li>
    @endforeach

</ul> --}}

    @include('partials.__footer')

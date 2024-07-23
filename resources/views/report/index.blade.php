<x-dash-layout>


    <section>
        <div>
            @foreach ($students as $abc )

            <h2>{{$abc->name}}</h2>
                
            @endforeach
        </div>
    </section>

</x-dash-layout>

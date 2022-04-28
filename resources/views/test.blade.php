<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Test') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($products as $product)
                        {{ $product->name }}

                            <a href="{{ route('deleteproduct', ['id' => $product->id ]) }}">Delete this message</a>
                            @csrf

                        <img src="{{asset('faker/').'/'. $product->image }}" >
                    @endforeach    
                    
                </div>
            </div>
           
        </div>
    </div>
</x-app-layout>

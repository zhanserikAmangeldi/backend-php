<x-layout>
    <x-slot:heading>
        Job retrieve view
    </x-slot:heading>
    <h1><strong>{{ $job['id'] }}. {{ $job['title'] }}</strong>: Salary {{ $job['salary'] }} per month</h1>
</x-layout>

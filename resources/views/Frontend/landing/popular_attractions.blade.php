<div class="popular-attractions-section p-4">
    <h2 class="text-2xl font-bold mb-4">Popular Attractions</h2>

    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse($hotels as $hotel)
            <div class="hotel-card border rounded-lg shadow hover:shadow-lg transition transform hover:scale-105 p-4">
            
                <img src="{{ asset($hotel['thumbnail']) }}" alt="{{ $hotel['hotel_name'] }}" class="w-full h-40 object-cover rounded">

                
                <h3 class="font-semibold mt-2">{{ $hotel['hotel_name'] }}</h3>

                
                <p class="text-yellow-500"> {{ $hotel['rating_star'] }} ({{ $hotel['reviews_count'] }} reviews)</p>

                
                <p class="text-gray-700 mt-1">Starting from ${{ $hotel['minimum_price'] }}</p>

            
                <button class="mt-2 px-2 py-1 border rounded hover:bg-red-500 hover:text-white">
                    Favorite
                </button>

                
                @if($hotel['rating_star'] >= 4.7)
                    <span class="bg-green-500 text-white px-2 py-1 rounded absolute top-2 right-2 text-sm">Top Rated</span>
                @endif
            </div>
        @empty
            <p>No hotels available at the moment.</p>
        @endforelse
    </div>
</div>

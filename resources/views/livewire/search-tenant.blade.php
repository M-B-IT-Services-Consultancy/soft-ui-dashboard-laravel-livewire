<div class="relative p-2">
    <form wire:submit.prevent="searchTenant">
    <input wire:model="search" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="It’s a search engine for dodgy tenants "/>
    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-3 mt-3" nonce="{{ csp_nonce() }}">Search</button>
    </form>
    
    <div wire:loading class="absolute w-1/3 bg-white rounded-lg shadow">
        {{-- <div class="list-item">Searching...</div> --}}
        <ul class="divide-y-2 divide-gray-100">
            <li class="p-2 hover:bg-blue-600 hover:text-blue-200 ">
                Searching...
            </li>
        </ul>
    </div>
    @if($dodgyTenants)
    @php //print_r($dodgyTenants) @endphp
    <ul>
        @foreach($dodgyTenants as $dodgyTenant)
        <li>
            <p>{{$dodgyTenant}}</p>
        </li>
        @endforeach
    </ul>
    @elseif(isset($error))
    <p>{{$error}}</p>
    @else
    <p>No data to be shown</p>
    @endif
    
    @if(!empty($search))
        <div class="w-1/3 bg-white rounded-lg shadow">
            @if(!empty($dodgyTenants))
                <ul class="divide-y-2 divide-gray-100">
                    @foreach($dodgyTenants as $i => $dodgyTenant)
                        <li class="p-2 hover:bg-blue-600 hover:text-blue-200">
                            <a
                                href="{{route('home')}}"
                                class="padding-top-5 list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                            >{{ $dodgyTenant['tenant_name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
    
</div>

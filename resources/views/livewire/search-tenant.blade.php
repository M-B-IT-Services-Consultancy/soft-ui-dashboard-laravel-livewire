<div class="relative p-2">
    <!--<form wire:submit.prevent="searchTenant">-->
    <input wire:model="tenantSearch" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="It’s a search engine for dodgy tenants "/>
    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-3 mt-3" nonce="{{ csp_nonce() }}">Search</button>
    <!--</form>-->
    
    <div wire:loading class="absolute w-1/3 bg-white rounded-lg shadow">
        {{-- <div class="list-item">Searching...</div> --}}
        <ul class="divide-y-2 divide-gray-100">
            <li class="p-2 hover:bg-blue-600 hover:text-blue-200">
                Searching...
            </li>
        </ul>
    </div>
    
    @if(!empty($tenantSearch))
        <div class="responsive">
            @if(!empty($dodgyTenants))
            @php 
            #print_r($dodgyTenants);
            @endphp
                <table class="table-responsive table table-condensed table-striped table-bordered table-light">
                    <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Rating</th>
                      <th scope="col">Owner Feedback</th>
                    </tr>
                  </thead>
                    @foreach($dodgyTenants as $i => $dodgyTenant)
                    
                        <tr>
                            <td>
                                <strong>Name: </strong>
                                            
                                <a
                                    href="#"
                                
                                >{{ $dodgyTenant['tenant_name'] }}
                                </a>     
                            </td>
                            <td>
                                
                                    <strong>Rating: </strong>

                                    @for ($i = 0; $i < $dodgyTenant['tenant_rating']['rating']; $i++)
                                    <i class="fa fa-2x fa-star text-danger"></i>
                                    @endfor

                                    @for ($i = $dodgyTenant['tenant_rating']['rating']; $i < 3; $i++)
                                        <i class="fa fa-2x fa-star"></i>
                                    @endfor

                            </td>
                            <td>
                                {{substr($dodgyTenant['tenant_rating']['rating_description'],0,25)}}...
                                
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @elseif(isset($error))
    <p>{{$error}}</p>
    @else
    <p>No data to be shown</p>
    @endif
    
</div>

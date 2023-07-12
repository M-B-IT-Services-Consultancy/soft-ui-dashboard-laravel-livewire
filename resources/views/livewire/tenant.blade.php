<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>All Dodgy Tenants</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tenant Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email Address</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rating</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Property Issues</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
              
                  @if($tanents)
                  @foreach($tanents as $tanent)
                  @php 
                  $tenant_rating = $tanent['tenant_rating'];
                  $rating = isset($tenant_rating['rating']) ? $tenant_rating['rating'] : 0;
                  @endphp
              
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{Storage::url($tanent['tenant_photo'])}}" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$tanent['tenant_name']}}</h6>
                        <p class="text-xs text-secondary mb-0"></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$tanent['tenant_email']}}</p>
                    <p class="text-xs text-secondary mb-0"></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs text-secondary mb-0">{{$tanent['tenant_phone']}}</p>
                  </td>
                  <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">
                          <div class="mb-3">
                        @for($s=1;$s<=$rating;$s++)
                        <small class="fa fa-star text-{{ ($s<=3) ? 'danger' : 'gray'; }}"></small>
                        @endfor                                
                    </div>
                      </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                      @if(isset($tanent['tenant_rating']['rating_description']))
                    <p class="text-xs text-secondary mb-0">{{$tanent['tenant_rating']['rating_description']}}</p>
                    @endif
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                    <a href="javascript:;" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Approve">
                      <span class="badge badge-sm bg-gradient-success">Approve</span>
                    </a>
                    <a href="javascript:;" class="text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Approve">
                      <span class="badge badge-sm bg-gradient-danger">Deny</span>
                    </a>
                  </td>
                </tr>
                @endforeach
                @endif
                
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
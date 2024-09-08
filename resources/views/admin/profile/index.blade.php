@extends('admin.layout')

@section('content')
    <section>
        <div class="row">
            <div class="col-12">
                <div class="text-end">
                    <a href="{{url('profile-create')}}" class="btn btn-outline-success">Create New Profile</a>
                </div>
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Registered Profiles</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr class="text-center">
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Gender</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Age</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Mobile</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Posted at</th>
                          <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($pro as $val)
                        <tr class="align-middle text-center">
                            <td>
                                <span class="text-xs font-weight-bold mb-0">{{$i++}}</span>
                            </td>
                            <td>
                              <div class="d-flex justify-content-center px-2 py-1">
                                <div>
                                  <img src="{{ $val->image ? asset('image/profile/' . $val->image) : asset('image/common/' . ($val->gender == 'Male' ? 'default-male.jpg' : 'default-female.jpg')) }}" 
                                  class="avatar avatar-md me-3 border-radius-lg" style="object-fit: cover" alt="user-profile-img">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{$val->name}}</h6>
                                  <p class="text-xs text-secondary mb-0">{{$val->user->email}}</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">{{$val->gender}}</p>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">{{$val->age}}</p>
                            </td>
                            <td class="">
                                <span class="text-secondary text-xs font-weight-bold">{{$val->mobile}}</span>
                              </td>
                            <td class=" text-sm">
                                @if ($val->status == 1)
                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                @elseif($val->status == 2)
                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                @else
                                <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                                @endif
                             
                            </td>

                            <td class="">
                              <span class="text-secondary text-xs font-weight-bold">{{Carbon\Carbon::parse($val['created_at'])->diffForHumans()}}</span>
                            </td>
                            <td class="">
                              <a href="{{url('profile-view/'.$val->id)}}" class="btn btn-info btn-sm my-2">view</a>
                            </td>
                          </tr>
                        @empty
                            <tr>
                              <td colspan="8" class="text-center text-secondary text-xxs font-weight-bold">No registered profiles found.</td>
                            </tr>
                        @endforelse

          

                      </tbody>
                    </table>
                  </div>
                    <!-- Paginate -->
                    <div class="paginate-pro mt-5 text-center">
                      {{ $pro->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection
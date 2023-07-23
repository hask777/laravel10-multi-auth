@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">


        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <img class="wd-100 rounded-circle" 
                                src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/admin_images/no_image.jpg') }}" 
                                alt="profile">
                                <span class="h4 ms-3 text-white">{{ $profileData->username }}</span>
                            </div>
                            {{-- <div class="dropdown">
                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="git-branch" class="icon-sm me-2"></i> <span
                                            class="">Update</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View
                                            all</span></a>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of
                            Social.</p> --}}
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                            <p class="text-muted">{{ $profileData->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $profileData->phone }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{ $profileData->address }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Role:</label>
                            <p class="text-muted">{{ $profileData->role }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Status:</label>
                            <p class="text-muted">{{ $profileData->status }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Basic Form</h6>

                            <form class="forms-sample">
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                        placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        autocomplete="off" placeholder="Password">
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">
                                        Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </form>

                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">5 min ago</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="meh" class="icon-sm me-2"></i> <span
                                                    class="">Unfollow</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="corner-right-up" class="icon-sm me-2"></i> <span
                                                    class="">Go to post</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="share-2" class="icon-sm me-2"></i> <span
                                                    class="">Share</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="copy" class="icon-sm me-2"></i> <span
                                                    class="">Copy link</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                            </div>
                            <div class="card-footer">
                                <div class="d-flex post-actions">
                                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                        <i class="icon-md" data-feather="heart"></i>
                                        <p class="d-none d-md-block ms-2">Like</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                        <i class="icon-md" data-feather="message-square"></i>
                                        <p class="d-none d-md-block ms-2">Comment</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <i class="icon-md" data-feather="share"></i>
                                        <p class="d-none d-md-block ms-2">Share</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-xl-block col-xl-3">
                {{-- <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">latest photos</h6>
                                <div class="row ms-0 me-0">
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-2">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-0">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-0">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                    <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                        <figure class="mb-0">
                                            <img class="img-fluid rounded" src="https://via.placeholder.com/96x96"
                                                alt="">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">suggestions for you</h6>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">
                                            <p>Mike Popescu</p>
                                            <p class="tx-11 text-muted">12 Mutual Friends</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- right wrapper end -->
        </div>

    </div>
@endsection

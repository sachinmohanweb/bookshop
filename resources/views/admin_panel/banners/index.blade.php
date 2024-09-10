@extends('admin_panel.dashboard_layouts.master')
@section('title', 'Banners')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
		<!--  <div class="content">
        <div class="chat d-flex phoenix-offcanvas-container pt-1 mt-n1 mb-9">
          <div class="card p-3 p-xl-1 mt-xl-n1 chat-sidebar me-3 phoenix-offcanvas phoenix-offcanvas-start" id="chat-sidebar">
            <button class="btn d-none d-sm-block d-xl-none mb-2" data-bs-toggle="modal" data-bs-target="#chatSearchBoxModal"><span class="fa-solid fa-magnifying-glass text-body-tertiary text-opacity-85 fs-7"></span></button>
            <div class="d-none d-sm-block d-xl-none mb-5"><button class="btn w-100 mx-auto" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-bars text-body-tertiary text-opacity-85 fs-7"></span></button>
              <ul class="dropdown-menu dropdown-menu-end p-0">
                <li><a class="dropdown-item" href="#!">All</a></li>
                <li><a class="dropdown-item" href="#!">Read</a></li>
                <li><a class="dropdown-item" href="#!">Unread</a></li>
              </ul>
            </div>
            <div class="form-icon-container mb-4 d-sm-none d-xl-block"><input class="form-control form-icon-input" type="text" placeholder="People, Groups and Messages" /><span class="fas fa-user text-body fs-9 form-icon"></span></div>
            <ul class="nav nav-phoenix-pills mb-5 d-sm-none d-xl-flex" id="contactListTab" data-chat-thread-tab="data-chat-thread-tab" role="tablist">
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer active" data-bs-toggle="tab" data-chat-thread-list="all" role="tab" aria-selected="true">All</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer" data-bs-toggle="tab" role="tab" data-chat-thread-list="read" aria-selected="false">Read</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer" data-bs-toggle="tab" role="tab" data-chat-thread-list="unread" aria-selected="false">Unread</a></li>
            </ul>

            <div class="scrollbar">
              <div class="tab-content" id="contactListTabContent">
                <div data-chat-thread-tab-content="data-chat-thread-tab-content">
                  <ul class="nav chat-thread-tab flex-column list">
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  active" data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-1" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/20.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Sharuka Nijibum</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Just now</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">This is a message from you</p>
                          </div>
                        </div>
                      </a>
                    </li>
                                    
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-11" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/57.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Harley Brown</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

          <div class="card tab-content flex-1 phoenix-offcanvas-container">
            <div class="tab-pane h-100 fade active show" id="tab-thread-1" role="tabpanel" aria-labelledby="tab-thread-1">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-0"><span class="line-clamp-1">Sharuka Nijibum</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-0">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">I have got a date at a quarter to eight; I’ll see you at the gate, so don’t be late.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">This is a message from you</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">You know New York, you need New York, you know you need a unique New York.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Willie’s really weary.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Eddie edited it.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2 w-min-content">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Yes, in an organization stature</p><a href="../assets/img/chat/1.png" data-gallery="gallery-undefined"><img class="rounded-2 object-fit-cover mt-1" src="../assets/img/chat/1.png" alt="" style="max-width: 200px;" /></a>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">If Peter Piper picked a peck of pickled peppers, where’s the peck of pickled peppers Peter Piper picked?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Peter Piper picked a peck of pickled peppers. A peck of pickled peppers Peter Piper picked.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-0"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-0" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-0"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-0" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-0">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/20.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Sharuka Nijibum</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="phoenix-offcanvas-backdrop d-lg-none top-0" data-phoenix-backdrop="data-phoenix-backdrop"></div>
          <div class="modal fade" id="chatSearchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
              <div class="modal-content mt-15">
                <div class="modal-body p-0">
                  <div class="chat-search-box">
                    <div class="form-icon-container"><input class="form-control py-3 form-icon-input rounded-1" type="text" autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span class="fa-solid fa-magnifying-glass fs-9 form-icon"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
            </div>
          </div>
        </footer>
      </div> -->

@endsection

@section('script')
@endsection
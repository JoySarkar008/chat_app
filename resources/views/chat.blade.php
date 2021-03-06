@extends('layouts.app')

@section('content')
    <div class="container">

        <body>
            <div id="snippetContent">
                <main class="content">
                    <div class="container p-0">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-12 col-lg-5 col-xl-3 border-right">
                                    @foreach ( $friends as $friend )
                                        <a href="#" class="list-group-item list-group-item-action border-0">
                                            <div class="badge bg-success float-right">5</div>
                                            <div class="d-flex align-items-start">
                                                <img src="https://ui-avatars.com/api/?name={{ $friend ->name}}" class="rounded-circle mr-1"
                                                    alt="Vanessa Tucker" width="40" height="40" />
                                                <div class="flex-grow-1 ml-3" id="status_{{ $friend ->id }}">
                                                    {{ $friend ->name }}
                                                    @if ($friend['is_online'] == 1)
                                                    <div class="small"><span class="fa fa-circle chat-online"></span>
                                                        Online</div>
                                                    @else
                                                    <div class="small"><span class="fa fa-circle chat-offline"></span>
                                                        Offline</div>
                                                    @endif

                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                                <div class="col-12 col-lg-7 col-xl-9">
                                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                        <div class="d-flex align-items-center py-1">
                                            <div class="position-relative"><img
                                                    src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                    class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                                                    height="40" /></div>
                                            <div class="flex-grow-1 pl-3">
                                                <strong>Sharon Lessman</strong>
                                                <div class="text-muted small"><em>Typing...</em></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative">
                                        <div class="chat-messages p-4">
                                            <div class="chat-message-right pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="rounded-circle mr-1" alt="Chris Wood" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                    <div class="font-weight-bold mb-1">You</div>
                                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te
                                                    vix.
                                                </div>
                                            </div>
                                            <div class="chat-message-left pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                        class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal
                                                    commodo.
                                                </div>
                                            </div>
                                            <div class="chat-message-right mb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="rounded-circle mr-1" alt="Chris Wood" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                    <div class="font-weight-bold mb-1">You</div>
                                                    Cum ea graeci tractatos.
                                                </div>
                                            </div>
                                            <div class="chat-message-left pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                        class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                    Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor
                                                    magna, vitae commodo lectus mauris et velit. Proin ultricies placerat
                                                    imperdiet. Morbi varius quam ac venenatis tempus.
                                                </div>
                                            </div>
                                            <div class="chat-message-left pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                        class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                    Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                                </div>
                                            </div>
                                            <div class="chat-message-right mb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                        class="rounded-circle mr-1" alt="Chris Wood" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                    <div class="font-weight-bold mb-1">You</div>
                                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te
                                                    vix.
                                                </div>
                                            </div>
                                            <div class="chat-message-left pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                        class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                                                        height="40" />
                                                    <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal
                                                    commodo.
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="flex-grow-0 py-3 px-4 border-top">
                                        <div class="input-group"><input type="text" class="form-control"
                                                placeholder="Type your message" /> <button
                                                class="btn btn-primary">Send</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </div>


@endsection
